<?php

namespace App\Manager;

use App\Entity\Users;

class UserManager extends BaseManager
{

    /**
     * @return Users[]
     */
    public function getAllUsers(): array
    {
        $query = $this->pdo->query("select * from Users");

        $users = [];

        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $users[] = new Users($data);
        }

        return $users;
    }

    public function getByUsername(string $username): ?Users
    {
        $query = $this->pdo->prepare("SELECT * FROM Users WHERE username = :username");
        $query->bindValue("username", $username, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if ($data) {
            return new Users($data);
        }

        return null;
    }

    public function insertUser(Users $user)
    {
        $query = $this->pdo->prepare("INSERT INTO Users (password, username), VALUES (:password, :username)");
        $query->bindValue("password", $user->getHashedPassword(), \PDO::PARAM_STR);
        $query->bindValue("username", $user->getUsername(), \PDO::PARAM_STR);
        $query->execute();
    }
}
