<?php $this->title = 'Article'; ?>
<header class="masthead" style="background-image: url('img/typewriter_white.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Billet simple pour l'Alaska</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container p4">
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= $article->getContent();?></p>
    <p class="text-secondary">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>
<br>

<?php
if ($this->session->get('pseudo') && $this->session->get('role') === 'admin') {
    ?>
        <div class="actions">
            <div class="container">
                <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>"><button type="button" class="btn rounded btn-outline-secondary">Modifier</button></a>
                <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"><button type="button" class="btn rounded btn-outline-danger">Supprimer</button></a>
            </div>
        </div>
    <?php
}else{
    ?>

    <?php
}
?>


<div class="text-center container">
    <a class="btn btn-info rounded" href="../public/index.php?route=listArticles">Retour à la liste des billets</a>
</div>
<br>
<hr>
<br>
<div id="comments" class="text-left" style="margin-left: 50px">
    <?php include('form_comment.php'); ?>
    <br>
    <hr>
    <br>

    <?php
    if (count($comments)==0){
        ?>
    <h3>Il n'y aucun commentaire pour le moment</h3>
        <?php
           }else {
        ?>
    <h3>Liste des commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
    <p class="font-italic">De <ins><?= htmlspecialchars($comment->getPseudo());?></ins></p>
    <p><?= htmlspecialchars($comment->getContent());?></p>
    <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
    <?php
    if($comment->isFlag()) {
        ?>
        <p class="text-warning">Ce commentaire a déjà été signalé</p>
        <?php
    }else {
        ?>
        <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>"><button type="button" class="btn rounded btn-outline-warning">Signaler le commentaire</button></a></p>
        <?php
    }
    ?>

    <?php
    if ($this->session->get('pseudo') && $this->session->get('role') === 'admin') {
        ?>
    <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"><button type="button" class="btn rounded btn-outline-danger">Supprimer le commentaire</button></a></p>
    <br>
        <?php
    }else {
        ?>
        <?php
    }
    ?>
        <?php
    }
    ?>
        <?php
    }
    ?>
</div>