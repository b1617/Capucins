<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TuteurRepository")
 */
class Tuteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     */
    private $nomTuteur;
    /**
     * @ORM\Column(type="string")
     */
    private $prenomTuteur;
    /**
     * @ORM\Column(type="string")
     */
    private  $mailTuteur;
    /**
     * @ORM\Column(type="integer")
     */
    private $telTuteur;

    /**
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumn(name="idEntreprise",referencedColumnName="id")
     */

    private $entreprise;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomTuteur()
    {
        return $this->nomTuteur;
    }

    /**
     * @param mixed $nomTuteur
     */
    public function setNomTuteur($nomTuteur): void
    {
        $this->nomTuteur = $nomTuteur;
    }

    /**
     * @return mixed
     */
    public function getPrenomTuteur()
    {
        return $this->prenomTuteur;
    }

    /**
     * @param mixed $prenomTuteur
     */
    public function setPrenomTuteur($prenomTuteur): void
    {
        $this->prenomTuteur = $prenomTuteur;
    }

    /**
     * @return mixed
     */
    public function getMailTuteur()
    {
        return $this->mailTuteur;
    }

    /**
     * @param mixed $mailTuteur
     */
    public function setMailTuteur($mailTuteur): void
    {
        $this->mailTuteur = $mailTuteur;
    }

    /**
     * @return mixed
     */
    public function getTelTuteur()
    {
        return $this->telTuteur;
    }

    /**
     * @param mixed $telTuteur
     */
    public function setTelTuteur($telTuteur): void
    {
        $this->telTuteur = $telTuteur;
    }

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise): void
    {
        $this->entreprise = $entreprise;
    }




}
