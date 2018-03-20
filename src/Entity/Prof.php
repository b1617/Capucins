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
