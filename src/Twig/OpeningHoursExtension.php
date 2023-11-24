<?php

namespace App\Twig;

use App\Entity\OpeningHours;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class OpeningHoursExtension extends AbstractExtension
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('openingHours', [$this, 'getTime'])
        ];
    }

    public function getTime()
    {
        return $this->em->getRepository(OpeningHours::class)->findAll();
    }
}
