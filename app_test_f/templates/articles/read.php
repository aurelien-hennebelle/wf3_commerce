<?php $this->layout('layout', ['title' => " $title."]) ?>

<?php $this->start('main_content') ?>
	<h2>voir l'article <?= $title ?></h2>
	<p><?= $content ?></p>
	<a href="<?= $this->url('article_edit', ['id' => $id]) ?>">modifier l'article</a>
<?php $this->stop('main_content') ?>