<?php $this->title = "Inscription"; ?>

<header class="masthead" style="background-image: url('img/computer.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Inscription</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<h3>Remplissez les champs ci-dessous pour créer votre compte</h3><br>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="../public/index.php?route=register">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="pseudo">Pseudo</label><br>
                        <input type="text" class="form-control" placeholder="Pseudo" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="password">Mot de passe</label><br>
                        <input type="password" class="form-control" placeholder="Mot de passe" id="password" name="password"><br>
                        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded" value="Inscription" id="sendMessageButton" name="submit">Inscription</button>
                </div>
            </form><br>
            <a href="../public/index.php">Retour à l'accueil</a>
        </div>
    </div>
</div>



