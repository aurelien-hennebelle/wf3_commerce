<?php $this->layout('layout', ['title' => 'Effacer un article']) ?>

<?php $this->start('main_content') ?>
	<h2>Voulez-vous vraiment supprimer le produit <?= $name; ?>?</h2>
	<form method="post">
		<div class="form-group">
			<label for="delete_choice">Difficulté</label>
			<select class="form-control" id="delete_choice" name="delete_choice">
				<option value="oui"> Oui </option>
				<option selected="selected" value="non"> Non </option>
			</select>
		</div>
		<div class="form-group">
			<button type="submit">Envoi</button>
		</div>
	</form>
	</div>
	<p><?=$message ?></p>
<?php $this->stop('main_content') ?>