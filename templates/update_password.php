<?php $this->title = 'Modifier mot mot de passe'; ?>

<header class="masthead" style="background-image: url('img/user.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Modification du mot de passe</h1>
                </div>
            </div>
        </div>
    </div>
</header>


<h3>Vous ête sur le point de modifier le mot de passe de <?= $this->session->get('pseudo'); ?></h3>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="../public/index.php?route=updatePassword">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="password">Nouveau mot de passe</label><br>
                        <input type="password" class="form-control" placeholder="Nouveau mot de passe" id="password" name="password"><br>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-warning rounded" value="Mettre à jour" id="submit" name="submit">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<div class="container text-center">
    <a class="btn btn-info rounded" href="../public/index.php?route=profile">Retour au profil</a>
</div>