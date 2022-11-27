<?php /** @var App\Entity\User $user */ ?>
    <h1><?= $phrase; ?></h1>

<?= $machin ?>

<?php
/** @var App\Entity\Post[] $posts */
foreach ($posts as $post) {
    echo $post->getContent();
}


