<div class="pg-wrapper">
<?php include 'incl/header.php'; ?>
    <div id="mainbanner">
        <div class="flexslider">
            <ul class="slides">
<<<<<<< HEAD
            <?php
            $posts = get_posts_news();
            foreach($posts as $post) {
            ?>
=======
                <?php
                $posts = get_posts();
                foreach($posts as $post){
                ?>
>>>>>>> 005e68ef21e2e7467dbbb4bb03a2f51ed9386d71
                <li>
                    <img src="img/posts/<?= $post->image ?>" alt="" />
                    <div class="container">
                        <div class="pg-caption">       
                            <h1><?= $post->title ?></h1>
                            <div class="clearfix"></div>        
                            <p><?= substr($post->content, 0, 140); ?>...</p>
                          <div class="clearfix"></div>
                        </div>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>  
    <div class="pg-content">
        <section class="pick-event padding-30-topbottom margin-top-minus-40">
            <div class="container">
                <div class="row">
                    <div class="pg-pagecontent col-md-12">
                        <div class="pg-blog-list pg-grid-blog">
                            <ul class="row">
                                <div class="col-md-12 pg-section-title"> 
                                    <h2>Toute l'actualité du Web</h2>
                                </div>
                                <?php
                                    $posts = get_posts_news();
                                    foreach($posts as $post){

                                        $date = $post->date;
                                ?>
                                    <li class="col-md-4">
                                        <div class="pg-time-zoon"></div>
                                        <figure>
                                            <a href="index.php?page=post&id=<?= $post->id ?>">
                                                <img src="img/posts/<?= $post->image ?>" alt="<?= $post->title ?>" title="<?= $post->title ?>">
                                            </a>
                                        </figure>
                                        <div class="pg-blog-info">
                                            <time datetime="<?= $post->date ?>"><?= date("d/m", strtotime($post->date)) ?></time>
                                            <h3>
                                                <a href="index.php?page=post&id=<?= $post->id ?>"><?= $post->title ?></a>
                                            </h3>
                                          
                                            <p><?= substr($post->content,0,160); ?>...</p>
                                              
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            </section>      
      </div>
=======
        </section>      
    </div>
>>>>>>> 005e68ef21e2e7467dbbb4bb03a2f51ed9386d71
