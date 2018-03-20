<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Stage;
use App\Entity\Entreprise;

class StageController extends Controller
{
    /**
     * @Route("/stage", name="stage")
     */
    public function home()
    {
        return $this->render('stage/stage.html.twig', [
            'controller_name' => 'stage',
        ]);
    }

}
