<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\ProfilType;
use App\Repository\ProfilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/profil")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/", name="profil_index", methods={"GET"})
     */
    public function index(ProfilRepository $profilRepository, SessionInterface $session): Response
    {
        $session->set('foo', 'bar');

        // gets the attribute set by another controller in another request
        $foobar = $session->get('foobar');

        // uses a default value if the attribute doesn't exist
        $filters = $session->get('filters', []);


        return $this->render('profil/index.html.twig', [
            'profils' => $profilRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="profil_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $profil = new Profil();

        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($profil);
            $entityManager->flush();
            $this->addFlash(
                'notice',
                'Vous avez créé votre profil!'
            );



            return $this->redirectToRoute('profil_index');
        }



        return $this->render('profil/new.html.twig', [
            'profil' => $profil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="profil_show", methods={"GET"})
     */
    public function show(Profil $profil): Response
    {
        return $this->render('profil/show.html.twig', [
            'profil' => $profil,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="profil_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Profil $profil): Response
    {
        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'notice',
                'Votre profil a bien été modifié!'
            );

            return $this->redirectToRoute('profil_index');
        }

        return $this->render('profil/edit.html.twig', [
            'profil' => $profil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="profil_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Profil $profil): Response
    {
        if ($this->isCsrfTokenValid('delete'.$profil->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($profil);
            $entityManager->flush();
            $this->addFlash(
                'notice',
                'Votre profil a été supprimé'
            );
        }

        return $this->redirectToRoute('profil_index');
    }
}
