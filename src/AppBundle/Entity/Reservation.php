<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class Reservation
{
    private $numero;
    private $visiteurs;
    private $date;
    private $billets;
    private $email;
    private $tarif;
    private $nbDeBillets;
    /**
     * @ORM\Column(type="date")
     */private $dateVisite;
    private $duree;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getVisiteurs()
    {
        return $this->visiteurs;
    }

    public function setVisiteurs($visiteurs)
    {
        $this->visiteurs = $visiteurs;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getBillets()
    {
        return $this->billets;
    }

    public function setBillets($billets)
    {
        $this->billets = $billets;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTarif()
    {
        return $this->tarif;
    }

    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }

    public function getNbDeBillets()
    {
        return $this->nbDeBillets;
    }

    public function setNbDeBillets($nbDeBillets)
    {
        $this->nbDeBillets = $nbDeBillets;
    }

    public function getDateVisite()
    {
        return $this->dateVisite;
    }

    public function setDateVisite($dateVisite)
    {
        $this->dateVisite = $dateVisite;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }
}