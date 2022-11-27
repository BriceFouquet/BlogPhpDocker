<?php

namespace App\Manager;

use App\Entity\Posts;

class PostManager extends BaseManager
{
    /**
     * @return Posts[]
     */
    public function getAllPosts(): array
    {
        $query = $this->pdo->query("select * from posts");

        $users = [];

        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $users[] = new Posts($data);
        }

        return $users;
    }
}
