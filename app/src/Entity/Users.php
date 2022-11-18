<?php

namespace App\Entity;

use App\Interfaces\PasswordProtectedInterface;
use App\Interfaces\UserInterface;
use Couchbase\User;

class Users extends BaseEntity implements UserInterface, PasswordProtectedInterface
{
    private ?int $id;
    public ?string $username;
    private ?string $password;
    public ?string $email;

        public function __construct(array $data = [])
        {
            parent::__construct($data);
        }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Users
     */
    public function setUsername(string $username): Users
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Users
     */
    public function setPassword(string $password): Users
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Users
     */
    public function setEmail(string $email): Users
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Users
     */
    public function setId(?int $id): Users
    {
        $this->id = $id;
        return $this;
    }

    public function getHashedPassword(): string
    {
        return 'coucou'; // faire la fonction de hashage
    }

    public function passwordMatch(string $plainPwd): bool
    {
        return true;
    }
}