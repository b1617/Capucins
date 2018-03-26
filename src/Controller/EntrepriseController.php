<?php

namespace App\Controller;


use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\ParameterBag;
use App\Entity\Entreprise;
use App\Entity\Tuteur;
class EntrepriseController extends Controller
{
    /**
     * @Route("/entreprise", name="entreprise")
     */
    public function index(Request $request)
    {
        $id = $request->query->get('id', 100);
        if ($id <= 2 && !$id == null){
            $repository = $this->getDoctrine()->getRepository(Entreprise::class);
            $entreprises = $repository->findAll();
            return $this->render('entreprise/entreprise.html.twig', [
                'entreprises' => $entreprises, 'id' => $id,
            ]);
        }
        return $this->render('login/login.html.twig', [
            'controller_name' => 'login',
        ]);
    }


    // TODO
    /**
     * @Route("/consulter", name="consulter")
     */
    public function consulter(Request $request)
    {
        $id = $request->query->get('id', 100);
        if ($id <= 2 && !$id == null){
            $repository = $this->getDoctrine()->getRepository(Entreprise::class);
            $entreprises = $repository->findAll();
            return $this->render('entreprise/entreprise.html.twig', [
                'entreprises' => $entreprises, 'id' => $id,
            ]);
        }
        return $this->render('login/login.html.twig', [
            'controller_name' => 'login',
        ]);
    }

    /**
     * @Route("/entreprise/add", name="addEntreprise")
     */
    public function addEntreprise(Request $request)
    {

        //
        $id = $request->query->get('id',0);

        // creates a task and gives it some dummy data for this example
        $entreprise = new Entreprise();

        $form = $this->createFormBuilder($entreprise)
            ->add('nomEntreprise', TextType::class)
            ->add('ville', TextType::class)
            ->add('codePostale', NumberType::class)
            ->add('adresse', TextType::class)
            ->add('tel', NumberType::class)
            ->add('activite', TextType::class)
            ->add('Ajouter', SubmitType::class, array('label' => 'Ajouter'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $entreprise = $form->getData();
             $entityManager = $this->getDoctrine()->getManager();
             $entreprise->setMail("");
             $entreprise->setActive(1);
             $entityManager->persist($entreprise);
             $entityManager->flush();
            // return $this->render('/entreprise/information/'.$entreprise->getId());
            return $this->redirectToRoute('information', array('idEntreprise' => $entreprise->getId() , 'id' => $id));
        }
        return $this->render('entreprise/add.html.twig', array(
            'form' => $form->createView(), 'id'=>$id
        ));
    }

    /**
     * @Route("/entreprise/information/{idEntreprise}/{id}", name="information")
     */
    public function information($idEntreprise,$id) {

        $repository = $this->getDoctrine()->getRepository(Entreprise::class);
        $entreprise = $repository->find($idEntreprise);

        $adresseCapucins = "College+Les+Capucins,+Route+de+Voisenon,+77000+Melun";
        $adresseEntreprise = $this->getAdresseEntreprise($entreprise);
        return $this->render('entreprise/information.html.twig', [
            'info' => $entreprise, "adresseCapucins" => $adresseCapucins, "adresseEntreprise" => $adresseEntreprise,'id'=>$id
        ]);
    }

    private function getAdresseEntreprise($e) {
        $nom = $e->getNomEntreprise();
        $ville = $e->getVille();
        $cp = $e->getCodePostale();
        $adresse = $e->getAdresse();
        return $nom."+".$ville."+".$cp."+".$adresse;
    }
    /**
     * @Route("/entreprise/information/addtuteur/{idEntreprise}/{id}", name="addTuteur")
     */
    public function addTuteur(Request $request,$idEntreprise,$id){

        $repository = $this->getDoctrine()->getRepository(Entreprise::class);
        $entreprise = $repository->find($idEntreprise);

        // creates a task and gives it some dummy data for this example
        $tuteur = new Tuteur();

        $form = $this->createFormBuilder($tuteur)
            ->add('nomTuteur', TextType::class)
            ->add('prenomTuteur', TextType::class)
            ->add('mailTuteur', TextType::class)
            ->add('telTuteur', NumberType::class)
            ->add('Ajouter', SubmitType::class, array('label' => 'Ajouter'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $tuteur = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $tuteur->setEntreprise($entreprise);
            $entityManager->persist($tuteur);
            $entityManager->flush();
            return $this->redirectToRoute('information', array('idEntreprise' => $idEntreprise , 'id' => $id));
        }
        return $this->render('entreprise/addtuteur.html.twig', array(
            'form' => $form->createView(), 'entreprise' => $entreprise, 'id'=>$id
        ));
    }
}
