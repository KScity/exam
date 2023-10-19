<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: VideoRepository::class)]
#[ApiResource]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'Video')]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $Video = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVideo(): ?user
    {
        return $this->Video;
    }

    public function setVideo(?user $Video): static
    {
        $this->Video = $Video;

        return $this;
    }
}
