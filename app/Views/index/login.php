<div class="soustitrebleu">Se Connecter</div>
<div class="bleu">
	<?php if($errors): ?>
	<div class="error">
        Identifiants incorrects
    </div>
    <?php endif; ?>

	<form name="login" method="POST" action="" class="form-inline">
		<input class="form-control" type="text" value="" placeholder="Login" name="login">
		<input class="form-control" type="password" value="" placeholder="Password" name="password">
		<input type="submit" class="btn btn-primary" value="send" name="send">
		<a class="link" href="?page=index.register">Inscription</a>
	</form>
</div>