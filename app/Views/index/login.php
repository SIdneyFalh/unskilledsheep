


<div class="soustitrebleu">Se Connecter</div>
<div class="bleu">
	<?php if($errors): ?>
	<div class="error">
        Identifiants incorrects
    </div>
    <?php endif; ?>
	<form name="login" method="POST" action="">
		<input class="input" type="text" value="" placeholder="Login" name="login">
		<input class="input" type="password" value="" placeholder="Password" name="password">
		<input type="submit" class="button" value="send" name="send">
	</form>
</div>