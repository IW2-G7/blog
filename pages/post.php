<?php include('incl/header.php') ?>
<?php

$post = get_post();

if($post == false){
    header("Location:index.php?page=error");
} else {
?>
        </div>
      <div class="pg-wrapper">
          <div class="pg-subheader"></div>
          <div class="pg-content">
            <section class="pg-pagesection">
              <div class="container">
                <div class="row">
                    <div class="pg-pagecontent col-md-9">
                      <div class="pg-blog-list pg-fullwidth-blog">
                        <ul class="row">
                          <li class="col-md-12">
                            <div class="pg-time-zoon">
                              <time datetime="<?= $post->date ?>"><?= date("d", strtotime($post->date)) ?><span><?= date("M", strtotime($post->date)) ?></span></time>
                              <h1>
                                <a href="#"><?= $post->title ?></a>
                              </h1>
                            </div>
                            <figure>
                                <img src="img/posts/<?= $post->image ?>" alt="<?= $post->title ?>" title="<?= $post->title ?>">
                            </figure>
                          </li>
                          
                        </ul>
                      </div>
                      <div class="pg-editor">
                        <?= nl2br($post->content); ?>
                      </div>

                      <div id="kodecomments">
                          <div class="pg-section-title"> <h2>Commentaires</h2> </div>
                          <ul>
                            <?php
                                $responses = get_comments();
                                if($responses != false){
                                    foreach($responses as $response){
                            ?>
                            <li>
                              <div class="thumblist">
                                <ul>
                                  <li>
                                    <figure><a href="#"><img src="img/user.png" alt="" height="50"></a></figure>
                                    <div class="text">
                                      <h4><a href="#"><?= $response->name ?></a></h4>
                                      <time datetime="<?= $reponse->date ?>">| <?= date("d/m/Y", strtotime($response->date)) ?></time>
                                      <p><?= nl2br($response->comment); ?></p>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <?php
                                    }
                                }   else echo "Aucun commentaire n'a été publié... Soyez le premier!";
                            ?>

                          </ul>
                      </div>

                      <div id="koderespond">
                          <div class="pg-section-title"> <h2>Poster un commentaire</h2> </div>
                            <form method="post">
                                <div class="row">
                                    <div class="input-field col-md-6">
                                        <input type="text" name="name" id="name" placeholder="name" />
                                    </div>
                                    <div class="input-field col-md-6">
                                        <input type="email" name="email" id="email" placeholder="email" />
                                    </div>
                                    <div class="input-field col-md-12">
                                        <p class="kd-textarea">
                                            <textarea placeholder="Commenter" name="comment" id="comment"></textarea>
                                        </p>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="thbg-color">
                                            Commenter ce post
                                        </button>
                                    </div>
                                </div>
                            </form>
                      </div>
                    </div>

                    <aside class="pg-pagesidebar col-md-3">
                       <div class="widget pg-recent-blog">
                              <div class="pg-widget-title">
                                  <h2>Toute l'actualité</h2>
                              </div>
                              <ul>
                                  <?php
                                    $postsA = get_posts_news();
                                    foreach($postsA as $post){
                                  ?>
                                    <li>
                                      <figure>
                                          <a class="pg-recent-thumb" href="index.php?page=post&id=<?= $post->id ?>">
                                              <img src="img/posts/<?= $post->image ?>" alt="">
                                          </a>
                                        <figcaption>
                                          <h3> 
                                              <a class="news_une" href="index.php?page=post&id=<?= $post->id ?>">
                                                  <span><?= $post->title ?>
                                              </a>
                                          </h3>
                                          <p><?= substr($post->content,0,140); ?>...</p>
                                          <span class="time-news"><?= date("d/m", strtotime($post->date)) ?></span>
                                      </figure>
                                    </li>
                                  <?php
                                    }
                                  ?>
                              </ul>
                        </div>

                    </aside>

                  </div>
                </div>
            </section>
          </div>  

        <div class="container">

<?php
}

    if(isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $comment = htmlspecialchars(trim($_POST['comment']));
        $errors = [];

        if(empty($name) || empty($email) || empty($comment)){
            $errors['empty'] = "Tous les champs n'ont pas été remplis";
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'adresse email n'est pas valide";
            }
        }

        if(!empty($errors)){
            ?>
                <div class="card red">
                    <div class="card-content white-text">
                        <?php
                            foreach($errors as $error){
                                echo $error."<br/>";
                            }
                        ?>
                    </div>
                </div>
            <?php
        } else {
            comment($name,$email,$comment);
            ?>
                <script>
                    window.location.replace("index.php?page=post&id=<?= $_GET['id'] ?>");
                </script>
            <?php
        }
    }
?>
