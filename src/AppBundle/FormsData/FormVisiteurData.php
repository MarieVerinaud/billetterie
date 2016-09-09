<?php

namespace AppBundle\FormsData;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


class FormVisiteurData
{
    /**
     * @Assert\NotBlank(message="Merci de saisir le nom")
     */
    private $nom;
    /**
     * @Assert\NotBlank(message="Merci de saisir le prénom")
     */
    private $prenom;
    /**
     * @Assert\NotBlank(message="Merci d'indiquer votre pays")
     */
    private $pays;
    /**
     * @Assert\DateTime(message="Merci d'indiquer la date de naissance")
     */
    private $dateNaissance;
    /**
     * @Assert\Type('boolean')
     */
    private $tarifReduit;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function getTarifReduit()
    {
        return $this->tarifReduit;
    }

    public function setTarifReduit($tarifReduit)
    {
        $this->tarifReduit = $tarifReduit;
    }


}