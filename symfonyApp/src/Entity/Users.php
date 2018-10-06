<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usertype;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userpass;

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

    public function getUsertype(): ?bool
    {
        return $this->usertype;
    }

    public function setUsertype(bool $usertype): self
    {
        $this->usertype = $usertype;

        return $this;
    }

    public function getUserpass(): ?string
    {
        return $this->userpass;
    }

    public function setUserpass(string $userpass): self
    {
        $this->userpass = $userpass;

        return $this;
    }
}
