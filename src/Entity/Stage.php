<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StageRepository")
 */
class Stage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="Eleve")
     * @ORM\JoinColumn(name="idEleve",referencedColumnName="id")
     */
private $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="Prof")
     * @ORM\JoinColumn(name="idProf",referencedColumnName="id")
     */
private $prof;

    /**
     *  @ORM\ManyToOne(targetEntity="Tuteur")
     * @ORM\JoinColumn(name="idTuteur",referencedColumnName="id")
     */
private $tuteur;

    /**
     * @ORM\Column(type="date")
     */
private $dateStage;

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
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * @param mixed $eleve
     */
    public function setEleve($eleve): void
    {
        $this->eleve = $eleve;
    }

    /**
     * @return mixed
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * @param mixed $prof
     */
    public function setProf($prof): void
    {
        $this->prof = $prof;
    }

    /**
     * @return mixed
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * @param mixed $tuteur
     */
    public function setTuteur($tuteur): void
    {
        $this->tuteur = $tuteur;
    }

    /**
     * @return mixed
     */
    public function getDateStage()
    {
        return $this->dateStage;
    }

    /**
     * @param mixed $dateStage
     */
    public function setDateStage($dateStage): void
    {
        $this->dateStage = $dateStage;
    }



}
