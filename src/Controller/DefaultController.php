<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        return $this->render('index.html.twig');

        /*&return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);*/
    }

    /**
     * @Route("/carteira", name="carteira")
     */
    public function wallet()
    {
        return $this->json([
            'positions' => [
                'PETR4' => [
                    'price' => '25.75',
                    'quantity' => 100
                ]
            ]
        ]);
    }
}
