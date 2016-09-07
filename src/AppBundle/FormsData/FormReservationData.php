<?php

namespace AppBundle\FormsData;

use Symfony\Component\Validator\Constraints as Assert;


class FormReservationData
{
    /**
     * @Assert\NotBlank(message="La date n'est pas valide.")
     * @Assert\DateTime()
     */
    private $dateVisit;
    /**
     * @Assert\NotBlank(message="Merci de sélectionner la durée souhaitée.")
     */
    private $duree;
    /**
     * @Assert\NotBlank()
     * @Assert\Range(min=0, minMessage="Attention il y a une erreur dans la quantité.", max="1000", maxMessage="Vous ne pouvez pas commander plus de 1000 billets." )
     */
    private $nbDeBillets;
    /**
     * @Assert\NotBlank(message="L'email renseigné n'est pas valide.")
     */
    private $email;

    public function getDateVisit()
    {
        return $this->dateVisit;
    }

    public function setDateVisit($dateVisit)
    {
        $this->dateVisit = $dateVisit;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getNbDeBillets()
    {
        return $this->nbDeBillets;
    }

    public function setNbDeBillets($nbDeBillets)
    {
        $this->nbDeBillets = $nbDeBillets;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}