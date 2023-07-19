<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
  #[Route('/', 'home.index', methods: ['GET'])]
  public function number(): Response
  {
    $number = rand(0, 100);
    return $this->render('home.html.twig');
  }
}
