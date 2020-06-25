<?php $this->title = 'Toutes les publications'; ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/aurora.jpg')">
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
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<h2 class="container p-3 border border-info rounded">Découvrez ici l'ensemble de mes publication de mon dernier ouvrage qui est un hommage à la solitude et aux grands espaces.</h2>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php
            foreach ($articles as $article)
            {
                ?>
                <div class="post-preview">
                    <hr>
                    <a href="post.html">
                        <h3 class="post-title">
                            <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a>
                        </h3>
                        <p>
                            <?= $article->getContent();?>
                        </p>
                    </a>
                    <p class="post-meta">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
                </div>
                <?php
            }
            ?>
            <hr>
        </div>
    </div>
</div>


