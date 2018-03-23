<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/login/{id}", name="login")
     */
    public function login($id)
    {
        return $this->render('index/index.html.twig', [
            'id' => $id,
        ]);
    }
}
