<?php

namespace AppBundle\Controller;

use AppBundle\Form\ReservationFormType;
use AppBundle\Form\VisiteurFormType;
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
            $reservationChecker = new ReservationChecker();
            /*$reservationCheckerOk = $reservationChecker->isValidReservation($reservation);
            dump($reservationCheckerOk); die;*/
            if($reservationChecker->isValidReservation($reservation))
            {
                return $this->redirectToRoute('billetterie_form_2', [
                    'reservation' => $reservation
                ]);
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

    /**
     * @Route("/billetterie/visiteurs", name="billetterie_form_2")
     */
    public function visiteurInfoAction(Request $request)
    {
        $form = $this->createForm(VisiteurFormType::class);

        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            $visiteur = $form->getData();

        }

        return $this->render(':billetterie:visiteur.html.twig', [
            'form' => $form->createView()
        ]);

    }

}