<?php

namespace AppBundle\Controller;

use AppBundle\Form\ReservationFormType;
use AppBundle\FormsData\FormReservationData;
use AppBundle\ReservationChecker\ReservationChecker;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }

    /**
     * @Route("/billetterie", name="billetterie_form_1")
     */
    public function billetterieAction(Request $request)
    {
        $form = $this->createForm(ReservationFormType::class);

        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            $reservation = $form->getData();
            dump($reservation);die;
            $reservationChecker = new ReservationChecker();
            if($reservationChecker->isValidReservation($reservation))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($reservation);
                $em->flush();

                return $this->render('billetterie_form_2');
            }

            return $this->render(':billetterie:reservation.html.twig', [
                'form' => $form->createView(),
                'data' => $reservation
            ]);
        }

        return $this->render(':billetterie:reservation.html.twig', [
            'form' => $form->createView()
        ]);

    }

}