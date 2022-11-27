<?php

namespace App\Controller;

use App\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Manager\UserManager;
use App\Route\Route;

class PostController extends AbstractController
{
    // Prend la route, lui donne un nom et attribue une méthode
    #[Route('/', name: "homepage", methods: ["GET"])]
    public function home()
    {
        $manger = new PostManager(new PDOFactory());
        $posts = $manger->getAllPosts();

        // Array sert à prendre des parametres et les afficher dans home.php
        // Permet de faire passer des variables du "back" à la vue
        $this->render("home.php", [
            "posts" => $posts,
            "phrase" => "je suis une string",
            "machin" => 42
        ], "Tous les posts");

    }

    /**
     * @param $id
     * @param $truc
     * @param $machin
     * @return void
     */


    // Pour passer des params en URL et les afficher dans la page.
    // Sert à chercher un poste en particulier avec les arguments qu'on met dans l'URL
    #[Route('/post/{id}/{truc}/{machin}', name: "francis", methods: ["GET"])]
    public function showOne($id, $truc, $machin)
    {
        var_dump($id, $truc);
    }
}
