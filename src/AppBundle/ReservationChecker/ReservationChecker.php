<?php

namespace AppBundle\ReservationChecker;

use AppBundle\FormsData\FormReservationData;

class ReservationChecker
{
    public function isValidReservation(FormReservationData $reservation)
    {
        //Vérifier la date
        $date = date_timestamp_get($reservation->getDateVisit());

        if(!$this->isValidDate($date))
        {
            return false;
        }

        //Vérifier l'heure pour la demi-journee
        $duree = $reservation->getDuree();
        if(!$this->isValidTime($duree, $date))
        {
            return false;
        }

        return true;

        //Vérifier la quantité


    }

    private function isValidDate($date)
    {

        //Vérifier que la date donnée n'est pas un mardi
        if(date('w', $date) === "2")
        {
            return false;
        }

        //Vérifier que ce n'est pas le 1er mai, le 1er novembre ou le 25 décembre
        if(date('d/m', $date)=== "01/05" || date('d/m', $date)=== "01/11" || date('d/m', $date)=== "25/12"){
            return false;
        }

        //Vérifier que ce n'est pas une date antérieure à aujourd'hui
        if($date < getdate())
        {
            return false;
        }
        else {
            return true;
        }
    }

    private function isValidTime($duree, $date)
    {
        if($duree === 0.5 && $date === getdate() && date('G', getdate())>13)
        {
            return false;
        }
        else{
            return true;
        }
    }

}