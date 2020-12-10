<?php

namespace App\Controller;

use App\Entity\SpokenLanguages;
use App\Form\SpokenLanguagesType;
use App\Repository\SpokenLanguagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/spoken/languages")
 */
class SpokenLanguagesController extends AbstractController
{
    /**
     * @Route("/", name="spoken_languages_index", methods={"GET"})
     */
    public function index(SpokenLanguagesRepository $spokenLanguagesRepository): Response
    {
        return $this->render('spoken_languages/index.html.twig', [
            'spoken_languages' => $spokenLanguagesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="spoken_languages_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $spokenLanguage = new SpokenLanguages();
        $form = $this->createForm(SpokenLanguagesType::class, $spokenLanguage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($spokenLanguage);
            $entityManager->flush();

            return $this->redirectToRoute('spoken_languages_index');
        }

        return $this->render('spoken_languages/new.html.twig', [
            'spoken_language' => $spokenLanguage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="spoken_languages_show", methods={"GET"})
     */
    public function show(SpokenLanguages $spokenLanguage): Response
    {
        return $this->render('spoken_languages/show.html.twig', [
            'spoken_language' => $spokenLanguage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="spoken_languages_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SpokenLanguages $spokenLanguage): Response
    {
        $form = $this->createForm(SpokenLanguagesType::class, $spokenLanguage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('spoken_languages_index');
        }

        return $this->render('spoken_languages/edit.html.twig', [
            'spoken_language' => $spokenLanguage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="spoken_languages_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SpokenLanguages $spokenLanguage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$spokenLanguage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($spokenLanguage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('spoken_languages_index');
    }
}
