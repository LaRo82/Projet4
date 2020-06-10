<?php $this->title = 'Accueil'; ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>M. Forteroche</h1>
                        <span class="subheading">Bienvenue sur mon blog</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php
        foreach ($articles as $article)
        {
            ?>
          <div class="post-preview">
              <a href="post.html">
                  <h2 class="post-title">
                      <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a>
                  </h2>
                  <p>
                      <?= htmlspecialchars($article->getContent());?>
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

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<?php
if ($this->session->get('pseudo')) {
    ?>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <?php if($this->session->get('role') === 'admin') { ?>
        <a href="../public/index.php?route=administration">Administration</a>
    <?php } ?>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <?php
} else {
    ?>
    <a href="../public/index.php?route=register">Inscription</a>
    <?php
}
?>


