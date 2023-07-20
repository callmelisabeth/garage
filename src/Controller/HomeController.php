<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\CarsRepository;

class HomeController extends AbstractController
{
  #[Route('/', 'home.index', methods: ['GET'])]
  public function index(CarsRepository $carsRepository): Response
  {
    $cars = $carsRepository->findAll();
    return $this->render('home.html.twig', [
      'cars' => $cars
      
  ]);
  }
}
