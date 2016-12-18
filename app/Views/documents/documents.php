<div class="soustitrebleu">
	<?= $this->getCategory(); ?>
</div>
<div class="bleu">
		<?php foreach ($lesDocs as $leDoc): ?>

			<label>Titre: </label><div class="titre"><?= Secu::xss($leDoc->titre); ?></div>
			<label>Lien: </label><div class="lien"><a class="link" href="?page=documents.<?= $this->getCategory(); ?>.<?= $leDoc->id?>">voir plus</a></div>
			<div class="center">------</div>
		<?php endforeach; ?>
</div>