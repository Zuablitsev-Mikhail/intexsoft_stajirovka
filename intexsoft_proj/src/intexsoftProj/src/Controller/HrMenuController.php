<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HrMenuController extends AbstractController
{
    /**
     * @Route("/manager/menu", name="hr_menu")
     */
    public function index(): Response
    {
        return $this->render('hr_menu/index.html.twig', [
            'controller_name' => 'HrMenuController',
        ]);
    }
}
