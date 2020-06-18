<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<header class="masthead" style="background-image: url('img/editarticle.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Nouvel article</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<head>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="../public/index.php?route=<?= $route; ?>">
                <div class="control-group">
                    <label for="title">Titre de l'article</label><br>
                    <input type="text" class="form-control" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
                    <?= isset($errors['title']) ? $errors['title'] : ''; ?>
                </div>
                <br>
                <div class="control-group">
                    <label for="content">Contenu</label><br>
                    <textarea id="content" name="content" rows="8" cols="auto"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
                    <?= isset($errors['content']) ? $errors['content'] : ''; ?>
                    <br>
                    <button type="submit" class="btn btn-primary" value="<?= $submit; ?>" id="submit" name="submit">Publier</button>
                </div>
            </form><br>
            <a href="../public/index.php">Retour à l'accueil</a>
        </div>
    </div>
</div>