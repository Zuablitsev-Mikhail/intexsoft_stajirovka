<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserMenuController extends AbstractController
{
    /**
     * @Route("/user/menu", name="user_menu")
     */
    public function index(): Response
    {
        return $this->render('user_menu/index.html.twig', [
            'controller_name' => 'UserMenuController',
        ]);
    }
}
