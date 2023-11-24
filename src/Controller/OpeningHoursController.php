<?php

namespace App\Controller;

use App\Entity\OpeningHours;
use App\Form\OpeningHoursType;
use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/opening/hours')]
class OpeningHoursController extends AbstractController
{
    #[Route('/horaire_ouverture', name: 'openingHours.index', methods: ['GET'])]
    public function index(OpeningHoursRepository $openingHoursRepository): Response
    {
        return $this->render('openingHours/index.html.twig', [
            'openingHours' => $openingHoursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_openingHours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $openingHours = new OpeningHours();
        $form = $this->createForm(OpeningHoursType::class, $openingHours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($openingHours);
            $entityManager->flush();

            return $this->redirectToRoute('app_openingHours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('openingHours/new.html.twig', [
            'opening_hour' => $openingHours,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'openingHours.show', methods: ['GET'])]
    public function show(OpeningHours $openingHours): Response
    {
        return $this->render('openingHours/show.html.twig', [
            'opening_hour' => $openingHours,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_openingHours_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, OpeningHours $openingHours, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OpeningHoursType::class, $openingHours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_openingHours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('openingHours/edit.html.twig', [
            'opening_hour' => $openingHours,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_openingHours_delete', methods: ['POST'])]
    public function delete(Request $request, OpeningHours $openingHours, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$openingHours->getId(), $request->request->get('_token'))) {
            $entityManager->remove($openingHours);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_openingHours_index', [], Response::HTTP_SEE_OTHER);
    }
}
