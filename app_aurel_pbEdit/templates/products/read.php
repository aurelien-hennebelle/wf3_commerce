<?php $this->layout('layout', ['title' => " $name."]) ?>

<?php $this->start('main_content') ?>
	<h2>voir l'article <?= $name ?></h2>
	<p><?= $description ?></p>
	<img src="<?= $image ?>">
	<p><?= $price ?></p>
	<a href="<?= $this->url('product_edit', ['id' => $id]) ?>">modifier le produit</a>
<?php $this->stop('main_content') ?>