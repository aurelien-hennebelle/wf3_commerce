<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<nav>
		<ul>
			<li> <a href="<?= $this->url('home') ?>">Accueil</a> </li>
			<li> <a href="<?= $this->url('contact') ?>">Contacts</a> </li>
			<li> <a href="<?= $this->url('mentions_legales') ?>">Mentions légales</a> </li>
			<li> <a href="<?= $this->url('articles_index') ?>">Liste des articles</a> </li>
			<li> <a href="<?= $this->url('article_edit') ?>">modifier un article</a> </li>
			<li> <a href="<?= $this->url('article_delete') ?>">effacer un article</a> </li>
		</ul>
	</nav>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>