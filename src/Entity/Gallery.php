<?php

namespace App\Entity;

use App\Repository\GalleryRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Vich\UploaderBundle\Entity\File;

#[ORM\Entity(repositoryClass: GalleryRepository::class)]
class Gallery
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    private $fichier;

    #[ORM\Column(length: 255)]
    private ?string $name= null;
    
    #[Vich\UploadableField(mapping: 'gallery', fileNameProperty: 'gallery',)]
    private ?File $galleryFile = null;


    #[ORM\Column(length: 255)]
    private ?string $file = null;

    #[ORM\ManyToOne(inversedBy: 'gallery', targetEntity: Cars::class,)]
    #[ORM\JoinColumn(name: 'car_id', referencedColumnName: 'id')]
    private ?Cars $gallery = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function setGalleryFile(?File $galleryFile = null): void
    {
        $this->galleryFile = $galleryFile;
    }

    public function getGalleryFile(): ?File
    {
        return $this->galleryFile;
    }


    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): static
    {
        $this->file = $file;

        return $this;
    }

    public function getgallery(): ?Cars
    {
        return $this->gallery;
    }

    public function setgallery(?Cars $gallery): static
    {
        $this->gallery = $gallery;

        return $this;
    }
}
