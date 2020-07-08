<?php $this->title = 'Administration'; ?>

<header class="masthead" style="background-image: url('img/cogs.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Espace administration</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container w-25 text-center">
    <?php
    if ($this->session->get('add_article')){
        ?>
        <div class="alert alert-success" role="alert">
            <?= ($this->session->show('add_article')) ?>
        </div>
        <?php
        }elseif ($this->session->get('delete_article')){
        ?>
        <div class="alert alert-warning" role="alert">
            <?= ($this->session->show('delete_article')) ?>
        </div>
        <?php
    }elseif ($this->session->get('edit_article')){
        ?>
        <div class="alert alert-success" role="alert">
            <?= ($this->session->show('edit_article')) ?>
        </div>
        <?php
    }elseif ($this->session->get('delete_comment')){
        ?>
        <div class="alert alert-danger" role="alert">
            <?= ($this->session->show('delete_comment')) ?>
        </div>
        <?php
    }elseif ($this->session->get('delete_user')){
        ?>
        <div class="alert alert-danger" role="alert">
            <?= ($this->session->show('delete_user')) ?>
        </div>
        <?php
    }elseif ($this->session->get('unflag_comment')){
        ?>
        <div class="alert alert-warning" role="alert">
            <?= ($this->session->show('unflag_comment')) ?>
        </div>
        <?php
    }else{
        ?>
        <?php
    }
    ?>
</div>

<h2>Articles</h2><hr>
<a href="../public/index.php?route=addArticle"><button type="button" class="btn btn-outline-success rounded">Rédiger un nouvel article</button></a><hr>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Contenu</th>
            <th scope="col">Auteur</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <?php
    foreach ($articles as $article)
    {
        ?>
        <tr>
            <td class="align-middle"><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
            <td class="align-middle"><?= substr($article->getContent(), 0, 220);?>...</td>
            <td class="align-middle"><?= htmlspecialchars($article->getAuthor());?></td>
            <td class="align-middle">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
            <td class="align-middle">
                <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>"><button type="button" class="btn rounded btn-outline-warning">Modifier</button></a>
                <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"><button type="button" class="btn rounded btn-outline-danger">Supprimer</button></a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
<hr>
<br>
<?php
if (count($comments)>=1) {

?>
<h2>Commentaires signalés</h2>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</td>
            <th scope="col">Pseudo</td>
            <th scope="col">Message</td>
            <th scope="col">Date</td>
            <th scope="col">Actions</td>
        </tr>
    </thead>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <tr>
            <td class="align-middle"><?= htmlspecialchars($comment->getId());?></td>
            <td class="align-middle"><?= htmlspecialchars($comment->getPseudo());?></td>
            <td class="align-middle"><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
            <td class="align-middle">Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
            <td class="align-middle">
                <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>"><button type="button" class="btn rounded btn-outline-secondary">Désignaler le commentaire</button></a>
                <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"><button type="button" class="btn rounded btn-outline-danger">Supprimer le commentaire</button></a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
<?php
}else{
    ?>
    <h2>Aucun commentaire n'a été signalé</h2>
<?php
}
?>
<br>
<hr>
<br>

<h2>Utilisateurs</h2>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Pseudo</td>
            <th scope="col">Date</td>
            <th scope="col">Rôle</td>
            <th scope="col">Actions</td>
        </tr>
    <thead class="thead-dark">
    <?php
    foreach ($users as $user)
    {
        ?>
        <tr>
            <td class="align-middle"><?= htmlspecialchars($user->getPseudo());?></td>
            <td class="align-middle">Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
            <td class="align-middle"><?= htmlspecialchars($user->getRole());?></td>
            <td class="align-middle">
                <?php
                if($user->getRole() != 'admin') {
                    ?>
                    <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>"><button type="button" class="btn rounded btn-outline-danger">Supprimer l'utilisateur</button></a>
                <?php }
                else {
                    ?>
                    Suppression impossible
                    <?php
                }
                ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>