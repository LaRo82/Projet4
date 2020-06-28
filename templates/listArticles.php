<?php $this->title = 'Toutes les publications'; ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/aurora.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <p>Mon dernier ouvrage</p>
                    <h1>Billet simple pour l'Alaska</h1>
                </div>
            </div>
        </div>
    </div>
</header>


<h3 class="container text-center">Vous trouverez ici l'ensemble des publication de mon dernier ouvrage qui est un hommage à la solitude et aux grands espaces. Je poste régulièrement mes inspirations en tenant compte de vos remarques faites en commentaire.</h3>
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
                        <h4 class="post-title">
                            <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a>
                        </h4>
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


