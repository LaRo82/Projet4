<?php $this->title = 'Accueil'; ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/typewriter_black.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Jean Forteroche</h1>
                        <span class="subheading">Ecrivain - Acteur</span>
                        <hr>
                        <h2>Bienvenue sur mon blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <h1>Derniers billets</h1>
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
    <a href="../public/index.php?route=logout">Déconnexion</a><br>
    <a href="../public/index.php?route=profile">Profil</a><br>
    <?php if($this->session->get('role') === 'admin') { ?>
        <a href="../public/index.php?route=administration">Administration</a><br>
    <?php } ?>
    <a href="../public/index.php?route=addArticle">Nouvel article</a><br>
    <?php
} else {
    ?>
    <a href="../public/index.php?route=register">Inscription</a>
    <?php
}
?>


