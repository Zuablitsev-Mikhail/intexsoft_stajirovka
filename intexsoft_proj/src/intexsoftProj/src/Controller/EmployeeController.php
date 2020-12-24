<?php

namespace App\Controller;

use App\Form\PersonalDataType;
use App\Entity\PersonalData;
use App\Repository\PersonalDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/manager/employee")
 */
class EmployeeController extends AbstractController
{

    /**
     * @Route("/", name="employee_id", methods={"GET"})
     */
    public function index(PersonalDataRepository $personalDataRepository): Response
    {
        return $this->render('employee/index.html.twig', [
            'personal_datas' => $personalDataRepository->findAll(),
        ]);
    }
    /**
     * @Route("/{id}", name="employee_data_show", methods={"GET"})
     */

}
