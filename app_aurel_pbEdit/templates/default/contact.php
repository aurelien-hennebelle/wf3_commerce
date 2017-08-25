<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
	
	<h2>FORMULAIRE DE CONTACT</h2>
	
	<form method="post">
		<div>
			<label for="name"> Votre Nom </label>
			<input type="text" id="name" name="name" value="<?=$name ?>">
		</div>
		<div>
			<label for="email"> Votre email </label>
			<input type="email" id="email" name="email" value="<?=$email ?>">
		</div>
		<div>
			<label for="message"> Votre email </label>
			<textarea id="message" name="message" rows="8" cols="80"><?=$message ?></textarea>
		</div>
		<div>
			<button type="submit">Envoi</button>
		</div>

	</form>
<?php $this->stop('main_content') ?>