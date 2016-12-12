<?= $category; ?>
<?php foreach ($lesDocs as $leDoc): ?>
	<?= $leDoc->titre; ?>
	<?= $leDoc->description; ?>
	<?= $leDoc->contenu; ?>
<?php endforeach; ?>