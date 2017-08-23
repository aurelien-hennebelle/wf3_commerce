
<?php $this->layout('layout', ['title' => 'Liste des produits']) ?>



<?php $this->start('main_content') ?>
	<a href="<?= $this->url('product_create') ?>">Ajouter un produits</a>

	<h2>Liste des produits</h2>

	<?php foreach ($products as $product):?>
		<?= $product['name'] ?> <br/>
	<?php endforeach; ?>

<?php $this->stop('main_content') ?>