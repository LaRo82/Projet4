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

<div class="container w-25 text-center">
<?php
if ($this->session->show('login')) {
    ?>
    <div class="alert alert-success" role="alert">
        <?= "Content de vous revoir "?><?= $this->session->get('pseudo'); ?><?=" !"?>
    </div>
    <?php
}elseif ($this->session->show('logout')) {
    ?>
    <div class="alert alert-secondary" role="alert">
        <?="A bientôt"?><?= $this->session->get('pseudo'); ?><?=" !"?>
    </div>
    <?php
}elseif ($this->session->get('register')) {
    ?>
    <div class="alert alert-warning" role="alert">
        <?= $this->session->show('register') ?>
    </div>
    <?php
}elseif ($this->session->get('delete_account')) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?= $this->session->show('delete_account') ?>
    </div>
    <?php
}else{
    ?>
    <?php
}
?>
</div>


<br>
<h3><em>Découvrez mes dernieres publications</em></h3>
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
                          <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>"><?= htmlspecialchars($article->getTitle()); ?></a>
                      </h4>
                          <?= $article->getContent();?>
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


