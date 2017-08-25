<?php $this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>

<h2>INSCRIPTION</h2>

<form method="POST">
	<div>
		<label for="username">Nom-Prénom :</label>
		<input type="text" id="username" name="username" value="">
	</div>

	<div>
		<label for="email">Email :</label>
		<input type="text" id="email"  name="email" value="">
	</div>
	</div>

	<div>
		<label for="password">Mot de passe :</label>
		<input type="text" id="password"  name="password" value="">
	</div>

	<div>
		<label for="repeat_password">Répetez le Mot de passe :</label>
		<input type="text" id="repeat_password"  name="repeat_password" value="">
	</div>

	<button type="submit" name="button">Enregistrer</button>
</form>

<?php $this->stop('main_content') ?>