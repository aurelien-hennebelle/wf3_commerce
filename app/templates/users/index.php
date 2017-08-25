<?php $this->layout('layout', ['title' => "profile utilisateur"]) ?>

<?php $this->start('main_content') ?>
	<h2>Bonjour bienvenu <?= $user['username'] ?>.</h2>
	<p>Votre email: <?= $user['email'] ?></p>
<?php $this->stop('main_content') ?>
