<h2>Blog</h2>

<?php

$posts = get_posts();
foreach($posts as $post){
    ?>
    <div class="row">
        <div class="col-md-12">
            <h4><?= $post->title ?></h4>

            <div class="row">
                <div class="col-md-8">
                    <?= substr(nl2br($post->content),0,120) ?>...
                </div>
                <div class="col-md-4">
                    <img src="img/posts/<?= $post->image ?>" class="materialboxed responsive-img" alt="<?= $post->title ?>"/>
                    <br/><br/>
                    <a class="btn light-blue waves-effect waves-light" href="index.php?page=post&id=<?= $post->id ?>">Lire l'article complet</a>
                </div>
            </div>
        </div>
    </div>

    <?php
}
