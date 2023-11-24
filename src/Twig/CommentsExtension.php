<?php

namespace App\Twig;

use App\Entity\Comments;

use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CommentsExtension extends AbstractExtension
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('comments', [$this, 'getComments'])
        ];
    }

    public function getComment()
    {
        return $this->em->getRepository(Comments::class)->findAll();
    }
}
