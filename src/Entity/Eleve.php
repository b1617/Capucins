<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EleveRepository")
 */
class Eleve
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

    private $nomEleve;

    /**
     * @ORM\Column(type="string")
     */
    private $prenomEleve;

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
    public function getNomEleve()
    {
        return $this->nomEleve;
    }

    /**
     * @param mixed $nomEleve
     */
    public function setNomEleve($nomEleve): void
    {
        $this->nomEleve = $nomEleve;
    }

    /**
     * @return mixed
     */
    public function getPrenomEleve()
    {
        return $this->prenomEleve;
    }

    /**
     * @param mixed $prenomEleve
     */
    public function setPrenomEleve($prenomEleve): void
    {
        $this->prenomEleve = $prenomEleve;
    }
    /**
     * @ORM\Column(type="string")
     */


}

