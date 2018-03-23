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
     * @ORM\JoinColumn(name="idUserEleve",referencedColumnName="id")
     * @ORM\Column(type="integer")
     */
private $idUserEleve;

    /**
     * @ORM\OneToOne(targetEntity="Prof")
     * @ORM\JoinColumn(name="idUserProf",referencedColumnName="id")
     * @ORM\Column(type="integer")
     */
private $idUserProf;

    /**
     *  @ORM\ManyToOne(targetEntity="Tuteur")
     * @ORM\JoinColumn(name="idTuteur",referencedColumnName="id")
     * @ORM\Column(type="integer")
     */
private $idTuteur;

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
    public function getIdUserEleve()
    {
        return $this->idUserEleve;
    }

    /**
     * @param mixed $idUserEleve
     */
    public function setIdUserEleve($idUserEleve): void
    {
        $this->idUserEleve = $idUserEleve;
    }

    /**
     * @return mixed
     */
    public function getIdUserProf()
    {
        return $this->idUserProf;
    }

    /**
     * @param mixed $idUserProf
     */
    public function setIdUserProf($idUserProf): void
    {
        $this->idUserProf = $idUserProf;
    }

    /**
     * @return mixed
     */
    public function getIdTuteur()
    {
        return $this->idTuteur;
    }

    /**
     * @param mixed $idTuteur
     */
    public function setIdTuteur($idTuteur): void
    {
        $this->idTuteur = $idTuteur;
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
