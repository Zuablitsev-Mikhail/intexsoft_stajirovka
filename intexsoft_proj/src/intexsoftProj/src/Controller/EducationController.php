<?php

namespace App\Controller;

use App\Entity\Education;
use App\Entity\User;
use App\Form\EducationType;
use App\Repository\EducationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("employee/education")
 */
class EducationController extends AbstractController
{
    /**
     * @Route("/", name="education_index", methods={"GET"})
     */
    public function index(EducationRepository $educationRepository): Response
    {
        return $this->render('education/index.html.twig', [
            'education' => $educationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="education_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $education = new Education();
        $form = $this->createForm(EducationType::class, $education);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $date = new \DateTime();
            $education->setDateOfCreate($date);
            $education->setDateOfUpdate($date);

            $users = $this->getUser()->getUsername();
            $entityManager = $this->getDoctrine()->getManager();
            $user = new User();
            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $users]);

            $education->setUser($user);
            $entityManager->persist($education);
            $entityManager->flush();

            return $this->redirectToRoute('education_index');
        }

        return $this->render('education/new.html.twig', [
            'education' => $education,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="education_show", methods={"GET"})
     */
    public function show(Education $education): Response
    {
        return $this->render('education/show.html.twig', [
            'education' => $education,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="education_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Education $education): Response
    {
        $form = $this->createForm(EducationType::class, $education);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('education_index');
        }

        return $this->render('education/edit.html.twig', [
            'education' => $education,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="education_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Education $education): Response
    {
        if ($this->isCsrfTokenValid('delete'.$education->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($education);
            $entityManager->flush();
        }

        return $this->redirectToRoute('education_index');
    }

    /**
     * @Route("/user/{uid}", name="Ueducation_index_user", methods={"GET"})
     */
    public function Uindex(EducationRepository $educationRepository, int $uid): Response
    {
        return $this->render('education/index.html.twig', [
            'education' => $educationRepository->findBy(array('user'=> $uid),[])
        ]);
    }
}
