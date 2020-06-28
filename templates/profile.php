<?php $this->title = 'Mon profil'; ?>

<header class="masthead" style="background-image: url('img/user.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Détail de votre compte</h1>
                </div>
            </div>
        </div>
    </div>
</header>

    <?php
    if ($this->session->show('update_password')){
        ?>
        <div class="container alert alert-success w-25 text-center" role="alert">
            Votre mot de passe a bien été mis à jour !
        </div>
        <?php
    }else
        ?>

    <h3>Compte de <?= $this->session->get('pseudo') ?></h3>

<div class="container border rounded pt-4 pb-4">
        <div class="container text-center">
            <a href="../public/index.php?route=updatePassword"><button type="button" class="btn btn-outline-warning rounded">Modifier mon mot de passe</button></a><br>
        </div>
        <br>
        <div class="container text-center">
            <a href="../public/index.php?route=deleteAccount"><button type="button" class="btn btn-outline-secondary rounded">Supprimer mon compte</button></a>
        </div>
</div>

<br>
<div class="container">
    <a class="btn btn-info rounded" href="../public/index.php">Retour à l'accueil</a>
</div>