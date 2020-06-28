<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h4>Vous souhaitez réagir ? C'est ici que ça se passe...</h4>
            <form method="post" name="sentMessage" id="contactForm" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>" >
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="pseudo">Votre pseudo</label><br>
                        <input type="text" id="name" class="form-control" name="pseudo" placeholder="Votre pseudo" value="<?= $this->session->get("pseudo") ?>" required ><br>
                        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="content">Votre commentaire</label><br>
                        <textarea rows="5" class="form-control" id="content" name="content" placeholder="Votre commentaire" required><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
                        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
                    </div>
                    <div id="success"></div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary rounded" value="<?= $submit; ?>" id="submit" name="submit">
                    </div>
            </form>
        </div>
    </div>
</div>



