<div class="soustitrebleu">S'enregistrer</div>
<div class="bleu">
	<?php if($errors): ?>
	<div class="error">
        Erreur dans l'inscription
    </div>
    <?php endif; ?>
	<form name="register" method="POST" action="">
		<input class="input" type="text" value="" placeholder="Login" name="login">
		<input class="input" type="password" value="" placeholder="Password" name="password">
		<input type="submit" class="button" value="send" name="send">
		<a class="link" href="?page=index.login">Retour</a>
	</form>
</div>