<?php

namespace App\Controller;

use App\Entity\PersonalData;
use App\Entity\User;
use App\Form\PersonalDataType;
use App\Repository\PersonalDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("employee/personaldata")
 */
class PersonalDataController extends AbstractController
{
    /**
     * @Route("/", name="personal_data_index", methods={"GET"})
     */
    public function index(PersonalDataRepository $personalDataRepository): Response
    {
        return $this->render('personal_data/index.html.twig', [
            'personal_datas' => $personalDataRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="personal_data_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $personalDatum = new PersonalData();
        $form = $this->createForm(PersonalDataType::class, $personalDatum);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $users = $this->getUser()->getUsername();
            $entityManager = $this->getDoctrine()->getManager();
            $user = new User();
            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $users]);
            $personalDatum->setUserId($user);
            $entityManager->persist($personalDatum);
            $entityManager->flush();

            return $this->redirectToRoute('user_menu');
        }

        return $this->render('personal_data/new.html.twig', [
            'personal_datum' => $personalDatum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="personal_data_show", methods={"GET"})
     */
    public function show(PersonalData $personalDatum): Response
    {
        return $this->render('personal_data/show.html.twig', [
            'personal_datum' => $personalDatum,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="personal_data_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PersonalData $personalDatum): Response
    {
        $form = $this->createForm(PersonalDataType::class, $personalDatum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personal_data_index');
        }

        return $this->render('personal_data/edit.html.twig', [
            'personal_datum' => $personalDatum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="personal_data_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PersonalData $personalDatum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$personalDatum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($personalDatum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('personal_data_index');
    }
    /**
     * @Route("/user/{uid}", name="Upersonal_data_index", methods={"GET"})
     */
    public function Uindex(PersonalDataRepository $personalDataRepository, int $uid): Response
    {
        return $this->render('personal_data/index.html.twig', [
            'personal_datas' => $personalDataRepository->findBy(array('user' => $uid),[])
        ]);
    }
}
