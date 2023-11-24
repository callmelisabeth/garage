<?php

namespace App\Controller;

use App\Entity\OpeningHours;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\CarsRepository;
use App\Repository\OpeningHoursRepository;
use App\Repository\ServicesRepository;
use Doctrine\Persistence\ManagerRegistry;


class HomeController extends AbstractController
{
  #[Route('/', 'home', methods: ['GET'])]
  public function index(ManagerRegistry $doctrine, CarsRepository $carsRepository, ServicesRepository $servicesRepository, OpeningHoursRepository $openingHours, ): Response
  {
    $cars = $carsRepository->findAll();
    $services = $servicesRepository->findAll();
    
    return $this->render('home.html.twig', [
      "services" => $services,
      "openingHours" => $openingHours,
      "cars" => $cars
    ]);
  }
}
