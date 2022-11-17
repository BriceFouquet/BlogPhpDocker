<?php /** @var App\Entity\Users $users */ ?>
    <h1><?= $trucs; ?></h1>

<?php
/** @var App\Entity\Posts[] $posts */
foreach ($posts as $post) {
    echo $post->getContent();
}
