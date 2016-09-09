<?php

namespace AppBundle\ReservationChecker;

use AppBundle\FormsData\FormReservationData;

class ReservationChecker
{
    public function isValidReservation(FormReservationData $reservation)
    {
        //Vérifier que la date n'est pas un mardi
        $date = $reservation->getDateVisit()->format('w');
        //dump($this->isATuesday($date));
        if($this->isATuesday($date))
        {
            return false;
        }

        //Vérifier que la date n'est pas un jour férié
        $date = $reservation->getDateVisit()->format('d/m');
        //dump($this->isBankHoliday($date));
        if($this->isBankHoliday($date))
        {
            return false;
        }

        //Vérifier que la date n'est pas antérieure à aujourd'hui
        $date = $reservation->getDateVisit();
        //dump($this->isOlderThanToday($date));
        if($this->isOlderThanToday($date))
        {
            return false;
        }

        //Vérifier l'heure pour la journée
        $duree = $reservation->getDuree();
        $dateVisite = $reservation->getDateVisit()->format('d/m/Y');
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime();
        $heure= $date->format('G');
        $dateResa = $date->format('d/m/Y');
        if(!$this->isValidTime($duree, $dateVisite, $heure, $dateResa))
        {
            return false;
        }

        //Vérifier la quantité

        return true;

    }

    private function isATuesday($date)
    {
        return $date === "2";
    }

    private function isBankHoliday($date)
    {
        return ($date === "01/05" || $date === "01/11" || $date === "25/12");
    }

    private function isOlderThanToday($date)
    {
        //dump($date >= new \DateTime());
        return ($date >= new \DateTime());
    }

    private function isValidTime($duree, $dateVisite, $heure, $dateResa)
    {
        /*dump($duree);
        dump($dateVisite);
        dump($dateResa);
        dump($heure);
        dump($dateResa === $dateVisite);
        dump($heure>13);*/
        if($duree === 1 && $dateResa === $dateVisite && $heure>13)
        {
            return false;
        }
        else{
            return true;
        }
    }

}