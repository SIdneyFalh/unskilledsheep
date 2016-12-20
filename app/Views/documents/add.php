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
		<div class="form-group">
			<label class="add">Titre: </label>
			<input class="form-control" type="text" value="" placeholder="Titre" name="titre">
		</div>
		<div class="form-group">
			<label class="add">Description: </label>
			<textarea class="form-control" name="description" placeholder="Description"></textarea>
		</div>
		<div class="form-group">
			<label class="add">Contenu: </label>
			<textarea class="form-control" name="contenu" placeholder="Contenu"></textarea>
		</div>
		<div class="form-group">
			<label class="add">Catégorie: </label>
			<input class="form-control" type="text" value="" placeholder="Catégorie" name="categorie">
		</div>
		<div class="form-group">
			<label class="add">Type: </label><select class="form-control" name="type">
				<?php foreach ($lesTypes as $leType): ?>
					<option value="<?= $leType->id; ?>"><?= Secu::xss($leType->libelle); ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<input class="btn btn-primary" type="submit" name="send" value="send">
	</form>
</div>