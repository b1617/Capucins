<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Tuteur;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Prof;

class StageController extends Controller
{
    /**
     * @Route("/stage/{id}", name="stage")
     */
    public function stage(Request $request,$id)
    {

        $stage = new Stage();
        $form = $this->createFormBuilder($stage)

            ->add('tuteur', EntityType::class, array(
                // looks for choices from this entity
                'class' => Tuteur::class,
                'choice_label' => 'nomTuteur'
            ))
            ->add('prof', EntityType::class, array(
                // looks for choices from this entity
                'class' => Prof::class,
                'choice_label' => 'nomProf'
            ))
            ->add('eleve', EntityType::class, array(
                // looks for choices from this entity
                'class' => Eleve::class,
                'choice_label' => 'nomEleve'
            ))

            ->add('dateStage', DateType::class)
            ->add('Valider', SubmitType::class, array('label' => 'Valider'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                $stage = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($stage);
                $entityManager->flush();
                return $this->redirectToRoute('consulter', array('id' => $id));
        }
        return $this->render('stage/stage.html.twig', array(
            'form' => $form->createView(), 'id'=>$id
        ));


        return $this->render('stage/stage.html.twig', [
            'controller_name' => 'stage', 'id'=>$id,
        ]);
    }

    /**
     * @Route("/consulter/{id}", name="consulter")
     */
    public function consulter($id)
    {
        $repository = $this->getDoctrine()->getRepository(Stage::class);
        $stages = $repository->findAll();
      // var_dump($stages);
        return $this->render('stage/consulter.html.twig', [
            'stages' => $stages, 'id' => $id,
        ]);
    }

}
