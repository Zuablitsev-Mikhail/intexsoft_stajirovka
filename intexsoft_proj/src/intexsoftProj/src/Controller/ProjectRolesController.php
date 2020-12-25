<?php

namespace App\Controller;

use App\Entity\ProjectRoles;
use App\Form\ProjectRolesType;
use App\Repository\ProjectRolesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/projectroles")
 */
class ProjectRolesController extends AbstractController
{
    /**
     * @Route("/", name="project_roles_index", methods={"GET"})
     */
    public function index(ProjectRolesRepository $projectRolesRepository): Response
    {
        return $this->render('project_roles/index.html.twig', [
            'project_roles' => $projectRolesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="project_roles_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $projectRole = new ProjectRoles();
        $form = $this->createForm(ProjectRolesType::class, $projectRole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($projectRole);
            $entityManager->flush();

            return $this->redirectToRoute('project_roles_index');
        }

        return $this->render('project_roles/new.html.twig', [
            'project_role' => $projectRole,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_roles_show", methods={"GET"})
     */
    public function show(ProjectRoles $projectRole): Response
    {
        return $this->render('project_roles/show.html.twig', [
            'project_role' => $projectRole,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="project_roles_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ProjectRoles $projectRole): Response
    {
        $form = $this->createForm(ProjectRolesType::class, $projectRole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_roles_index');
        }

        return $this->render('project_roles/edit.html.twig', [
            'project_role' => $projectRole,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_roles_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ProjectRoles $projectRole): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projectRole->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($projectRole);
            $entityManager->flush();
        }

        return $this->redirectToRoute('project_roles_index');
    }
}
