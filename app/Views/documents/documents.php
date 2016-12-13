<?= $category; ?>
<?php foreach ($lesDocs as $leDoc): ?>
	<a href="?page=documents.exploit.<?= $leDoc->id?>"><?= $leDoc->titre; ?></a>
	<?= $leDoc->description; ?>
	<?= $leDoc->contenu; ?>
<?php endforeach; ?>