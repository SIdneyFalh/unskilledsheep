<div class="soustitrebleu">S'enregistrer</div>
<div class="bleu">
	<?php if($errors): ?>
	<div class="error">
        Erreur dans l'inscription
    </div>
    <?php endif; ?>
	<form name="register" method="POST" action="" class="form-inline">
		<input class="form-control" type="text" value="" placeholder="Login" name="login">
		<input class="form-control" type="password" value="" placeholder="Password" name="password">
		<input type="submit" class="btn btn-primary" value="send" name="send">
		<a class="link" href="?page=index.login">Retour</a>
	</form>
</div>