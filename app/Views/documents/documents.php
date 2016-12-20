<div class="soustitrebleu">
	<?= $this->getCategory(); ?>
</div>
<div class="bleu">
		<?php foreach ($lesDocs as $leDoc): ?>

			<dl>
				<dt>Titre: </dt>
				<dd><?= Secu::xss($leDoc->titre); ?></dd>
			</dl>
			<dl>
				<dt>Lien: </dt>
				<dd>
					<a class="link" href="?page=documents.<?= $this->getCategory(); ?>.<?= $leDoc->id?>">
						voir plus
					</a>
				</dd>
			<div class="center">------</div>
		<?php endforeach; ?>
</div>