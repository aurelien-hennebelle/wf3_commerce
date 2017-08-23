
<?php $this->layout('layout', ['title' => 'Liste des articles']) ?>



<?php $this->start('main_content') ?>
	<a href="<?= $this->url('article_create') ?>">Ajouter un article</a>

	<h2>Liste des articles</h2>

	<?php foreach ($articles as $article):?>
		<?= $article['title'] ?> <br/>
	<?php endforeach; ?>

<?php $this->stop('main_content') ?>