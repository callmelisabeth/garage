<?php

namespace App\Controller;

use App\Entity\Cars;
use App\Form\CarsType;
use App\Repository\CarsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;


#[Route('/cars')]
class CarsController extends AbstractController
{
    #[Route('/vehicule', name: 'cars.index', methods: ['GET'])]
    public function index(CarsRepository $carsRepository, ): Response
    {
        return $this->render('cars/index.html.twig', [
            'cars' => $carsRepository,
        ]);
    }

    #[Route('/new', name: 'app_cars_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // usually you'll want to make sure the user is authenticated first,
        // see "Authorization" below
        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY"); 
        $car = new Cars();
        $form = $this->createForm(CarsType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($car);
            $entityManager->flush();

            return $this->redirectToRoute('cars.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cars/new.html.twig', [
            'car' => $car,
            'formCars' => $form,
        ]);
    }

    #[Route('/{id}', name: 'cars.show', methods: ['GET'])]
    public function show(Cars $car): Response
    {
        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY"); 
        return $this->render('cars/show.html.twig', [
            'car' => $car,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cars_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cars $car, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CarsType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('cars.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cars/edit.html.twig', [
            'car' => $car,
            'formCars' => $form,
        ]);
    }

    #[Route('/{id}', name: 'cars.delete', methods: ['POST'])]
    public function delete(Request $request, Cars $car, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$car->getId(), $request->request->get('_token'))) {
            $entityManager->remove($car);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cars.index', [], Response::HTTP_SEE_OTHER);
    }
  
    #[Route('/vehicules/filtre', name: 'cars.filter')]
    public function carfilter(Request $request, ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(Cars::class);
        $cars = $repository->findAll(); 
  
        $price_max = $request->request->get('price_max');
        $kilometer_max = $request->request->get('kilometer_max');
        $date_min = $request->request->get('date_min');


        if ($date_min !== null) {
            $carposts = array_filter($cars, function ($carpost) use ($date_min) {
                return $carpost->getDate() >= $date_min;
            });
        }

        if ($price_max !== null) {
            $carposts = array_filter($carposts, function ($carpost) use ($price_max) {
                return $carpost->getPrice() <= $price_max;
            });
        }

        if ($kilometer_max !== null) {
            $carposts = array_filter($carposts, function ($carpost) use ($kilometer_max) {
                return $carpost->getKilometer() <= $kilometer_max;
            });
        }
        

        $html = $this->renderView('cars/index.html.twig', [
            'cars' => $cars,
        ]);

        return new Response($html);
    }
}
