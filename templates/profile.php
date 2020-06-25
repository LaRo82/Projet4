<?php $this->title = 'Mon profil'; ?>
<?= $this->session->show('update_password'); ?>

<header class="masthead" style="background-image: url('img/user.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Détail du profil utilisateur</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div>

    <h2>Pseudo : <?= $this->session->get('pseudo') ?></h2>
    <div class="container"><a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a></div>
    <div class="container"><a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a></div>
</div>
<br>
<a href="../public/index.php">Retour à l'accueil</a>