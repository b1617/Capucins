<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfRepository")
 */
class Prof
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

    private $nomProf;

    /**
     * @ORM\Column(type="string")
     */
    private $prenomProf;

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
    public function getNomProf()
    {
        return $this->nomProf;
    }

    /**
     * @param mixed $nomProf
     */
    public function setNomProf($nomProf): void
    {
        $this->nomProf = $nomProf;
    }

    /**
     * @return mixed
     */
    public function getPrenomProf()
    {
        return $this->prenomProf;
    }

    /**
     * @param mixed $prenomProf
     */
    public function setPrenomProf($prenomProf): void
    {
        $this->prenomProf = $prenomProf;
    }

    /**
     * @ORM\Column(type="string")
     */




}
