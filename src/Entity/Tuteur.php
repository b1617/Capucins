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
     * @ORM\OneToOne(targetEntity="Entreprise")
     * @ORM\JoinColumn(name="idEntreprise",referencedColumnName="id")
     * @ORM\Column(type="integer")
     */

    private $idEntreprise;

}
