<?php

if(hasnt_password() == 1){
    header("Location:index.php?page=password");
}

?>

<h2>Liste des articles</h2>
<hr/>

<table>
    <tr>
        <td>Status</td>
        <td>Titre</td>
        <td>Résumé</td>
        <td>Auteur</td>
    </tr>
<?php

$posts = get_posts();
foreach($posts as $post){
    ?>
    <tr>
        <td><?php echo ($post->posted == "0") ? "Non publié" : "Publié" ?></td>
        <td><a href="index.php?page=post&id=<?= $post->id ?>"><?= $post->title ?></a></td>
        <td><?= substr($post->content,0,30) ?></td>
        <td><?= $post->writer ?></td>
    <tr>
    <?php
}

?>
</table>

<h2>Commentaires non lus</h2>
<hr>
<?php
    $comments = get_comments();
?>
<table>
    <thead>
        <tr>
            <th>Article</th>
            <th>Commentaire</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(!empty($comments)) {
            foreach ($comments as $comment) {
                ?>
                <tr id="commentaire_<?= $comment->id ?>">
                    <td><?= $comment->title ?></td>
                    <td><?= substr($comment->comment, 0, 100); ?>...</td>
                    <td>
                        <a href="#" id="<?= $comment->id ?>"
                           class="btn-floating btn-small waves-effect waves-light green see_comment"><i
                                class="material-icons">done</i></a>
                        <a href="#" id="<?= $comment->id ?>"
                           class="btn-floating btn-small waves-effect waves-light red delete_comment"><i
                                class="material-icons">delete</i></a>
                        <a href="#comment_<?= $comment->id ?>"
                           class="btn-floating btn-small waves-effect waves-light blue modal-trigger"><i
                                class="material-icons">more_vert</i></a>

                        <div class="modal" id="comment_<?= $comment->id ?>">
                            <div class="modal-content">
                                <h4><?= $comment->title ?></h4>

                                <p>Commentaire posté par
                                    <strong><?= $comment->name . " (" . $comment->email . ")</strong><br/>Le " . date("d/m/Y à H:i", strtotime($comment->date)) ?>
                                </p>
                                <hr/>
                                <p><?= nl2br($comment->comment) ?></p>

                            </div>
                            <div class="modal-footer">
                                <a href="#" id="<?= $comment->id ?>"
                                   class="modal-action modal-close waves-effect waves-red btn-flat delete_comment"><i
                                        class="material-icons">delete</i></a>
                                <a href="#" id="<?= $comment->id ?>"
                                   class="modal-action modal-close waves-effect waves-green btn-flat see_comment"><i
                                        class="material-icons">done</i></a>
                            </div>


                        </div>


                    </td>
                </tr>

            <?php
            }
        }else{
            ?>
                <tr>
                    <td></td>
                    <td><center>Aucun commentaire à valider</center></td>
                </tr>
            <?php
        }
        ?>

<h2>Tous les commentaires</h2>
<hr>
<?php
    $allcomments = get_all_comments();
?>
<table>
    <thead>
        <tr>
            <th>Article</th>
            <th>Commentaire</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(!empty($allcomments)) {
            foreach ($allcomments as $commentaire) {
                ?>
                <tr id="commentaire_<?= $comment->id ?>">
                    <td><?= $commentaire->title ?></td>
                    <td><?= substr($commentaire->comment, 0, 100); ?>...</td>
                    <td>
                        <div class="modal" id="comment_<?= $commentaire->id ?>">
                            <div class="modal-content">
                                <h4><?= $commentaire->title ?></h4>

                                <p>Commentaire posté par
                                    <strong><?= $commentaire->name . " (" . $commentaire->email . ")</strong><br/>Le " . date("d/m/Y à H:i", strtotime($commentaire->date)) ?>
                                </p>
                                <hr/>
                                <p><?= nl2br($commentaire->comment) ?></p>
                            </div>
                        </div>
                    </td>
                </tr>

            <?php
            }
        }else{
            ?>
                <tr>
                    <td></td>
                    <td><center>Aucun commentaire</center></td>
                </tr>
            <?php
        }
        ?>
    </tbody>
</table>