<?php $this->title = 'Formulaire d\'édition'; ?>
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
                    <?php if(isset($post)){
                        echo'<h1>Editer un article</h1>';
                    }else{
                        echo'<h1>Nouvel article</h1>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</header>

<head>
    <title>Formulaire d'édition</title>
    <script src="https://cdn.tiny.cloud/1/g2tntjjfxzdvzqifmyk59pzmp0nqbwwqohpplepuhf81ud3v/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                    <button type="submit" class="btn btn-primary rounded" value="<?= $submit; ?>" id="submit" name="submit">Publier</button>
                </div>
            </form><br>
            <div class="text-right">
                <a class="btn btn-outline-secondary rounded" href="../public/index.php?route=listArticles">Voir la liste des articles</a>
            </div>
        </div>
    </div>
</div>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });
</script>