<?php $this->title = "Connexion"; ?>
<?= $this->session->show('error_login'); ?>
<header class="masthead" style="background-image: url('img/letter.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Connexion</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Remplissez les champs ci-dessous pour vous connecter</p>
            <form method="post" id="contactForm" action="../public/index.php?route=login">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="pseudo">Pseudo</label><br>
                        <input type="text" class="form-control" placeholder="Pseudo" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="password">Mot de passe</label><br>
                        <input type="password" class="form-control" placeholder="Mot de passe" id="password" name="password"><br>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Connexion" id="submit" name="submit">Connexion</button>
                </div>
            </form><br>
            <p>Pas encore de compte ? Cliquez <a href="../public/index.php?route=register">ici</a></p><hr>
            <a href="../public/index.php">Retour à l'accueil</a>
        </div>
    </div>
</div>

