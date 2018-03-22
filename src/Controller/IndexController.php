<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/" , name="default")
     */
    public function default()
    {
        return $this->render('login/login.html.twig', [
            'controller_name' => 'login',
        ]);
    }

    /**
     * @Route("/index", name="index")
     */
    public function index(Request $request)
    {
       $id = $request->query->get('id', 100);
        if ($id <=2 && !$id == null){
            return $this->render('index/index.html.twig', [
                'controller_name' => 'IndexController', 'id' => $id,
            ]);
        }
        return $this->render('login/login.html.twig', [
            'controller_name' => 'login',
        ]);

    }


}
