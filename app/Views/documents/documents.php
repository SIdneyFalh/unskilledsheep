<div class="soustitrebleu">
	<?= $this->getCategory(); ?>
</div>
<div class="bleu">
	<table>
		<tr>
			<td class="titre">Titre</td>
			<td class="titre">Description</td>
			<td class="titre">Lien</td>
		</tr>
		<?php foreach ($lesDocs as $leDoc): ?>
		<tr>
			<td><?= $leDoc->titre; ?></a></td>
			<td><?= $leDoc->description; ?></td>
			<td><a class="link" href="?page=documents.<?= $this->getCategory(); ?>.<?= $leDoc->id?>">voir plus</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>