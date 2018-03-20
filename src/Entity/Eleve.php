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
     * @ORM\Column(type="string")
     */

    private $classeEleve;
    /**
     * @ORM\Column(type="string")
     */
    private $anneeScolaire;
    /**
     * @ORM\Column(type="string")
     */

    private $login;
    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string")
     */

    private $role;

    /**
     * @ORM\Column(type="boolean")
     */

    private $present;
}

