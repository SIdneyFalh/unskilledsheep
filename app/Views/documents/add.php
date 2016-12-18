<div class="soustitrebleu">
	Ajouter un document
</div>
<div class="bleu">
	<?php if($errors): ?>
	<div class="error">
        Erreur dans l'ajout du document
    </div>
    <?php endif; ?>
	<form name="add" method="POST" ation=""> 
		<label>Titre: </label><input class="input" type="text" value="" placeholder="Titre" name="titre"></br>
		<label>Description: </label><textarea class="input" name="description" placeholder="Description"></textarea></br>
		<label>Contenu: </label><textarea class="input" name="contenu" placeholder="Contenu"></textarea></br>
		<label>Catégorie: </label><input class="input" type="text" value="" placeholder="Catégorie" name="categorie"></br>
		<input class="button" type="submit" name="send" value="send">
	</form>
</div>