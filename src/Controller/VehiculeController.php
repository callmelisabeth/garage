<?php

namespace App\Controller;

use App\Repository\CarsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VehiculeController extends AbstractController
{
    #[Route('/vehicule', 'vehicule', methods: ['GET'])]
    public function index(CarsRepository $carsRepository): Response
    {
        $cars = $carsRepository->findAll();
        return $this->render('partials/header/link/vehicule.html.twig', [
            'cars' => $cars
        ]);
    }
}
