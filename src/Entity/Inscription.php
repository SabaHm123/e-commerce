<?php

namespace App\Entity;

use App\Repository\InscriptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscriptionRepository::class)
 */
class Inscription
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
     /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="5", max="20", minMessage=" De 5 a 20 caractÃ¨res au plus")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre Mot de passe doit faire minimum 8 caractÃ¨res")
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapÃŠ le mÃĒme mot de passe!")
     */

    public $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Post", mappedBy="relation")
     */
    private $posts;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }
        
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getRoles(){
        return ['ROLE_ADMIN'];
    }
    public function getSalt(){
        return null;
    }

}
