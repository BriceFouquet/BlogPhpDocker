<?php /** @var App\Entity\Users $users */ ?>


<?php
/** @var App\Entity\Posts[] $posts */
foreach ($posts as $post) {
    echo $post->getContent();
}
