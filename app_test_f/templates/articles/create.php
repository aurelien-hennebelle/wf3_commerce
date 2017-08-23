<?php $this->layout('layout', ['title' => 'Ecrire un article']) ?>

<?php $this->start('main_content') ?>
	<h2>Ajouter un article</h2>

	<form method="post">
		
		<!--Titre de l'article-->
		<div>
			<label for="title">Titre</label>
			<input type="" name="title" value="<?=$title ?>"></input>	
		</div>

		<!--Contenu de l'article-->
		<div>
			<label for="content">Contenu</label>
			<textarea type="" name="content"><?=$content ?></textarea>	
		</div>

		<div>
			<button type="submit">Enregistrer</button>
		</div>

	</form>

<?php $this->stop('main_content') ?>