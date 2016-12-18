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
		<label class="add">Titre: </label><input class="inputadd" type="text" value="" placeholder="Titre" name="titre"></br>
		<label class="add">Description: </label><textarea class="area" name="description" placeholder="Description"></textarea></br>
		<label class="add">Contenu: </label><textarea class="area" name="contenu" placeholder="Contenu"></textarea></br>
		<label class="add">Catégorie: </label><input class="inputadd" type="text" value="" placeholder="Catégorie" name="categorie"></br>
		<label class="add">Type: </label><select class="type" name="type">
			<?php foreach ($lesTypes as $leType): ?>
				<option value="<?= $leType->id; ?>"><?= Secu::xss($leType->libelle); ?></option>
			<?php endforeach; ?>
		</select></br>
		<input class="button" type="submit" name="send" value="send">
	</form>
</div>