
<?php $this->layout('layout', ['title' => 'Liste des produits']) ?>



<?php $this->start('main_content') ?>
	<a href="<?= $this->url('product_create') ?>">Ajouter un produits</a>

	<h2>Liste des produits</h2>

	<?php foreach ($products as $product):?>
		<div>
			<?= $product['name'] ?>
			<?php  var_dump($product['id']); ?>
			<a href="<?= $this->url('product_edit',['id' => $product['id']]) ?>">Editer le produit</a>
			<a href="<?= $this->url('product_delete',['id' => $product['id']]) ?>">Effacer le produit</a>
		</div>	
	<?php endforeach; ?>

<?php $this->stop('main_content') ?>