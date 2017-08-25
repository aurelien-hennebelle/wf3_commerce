<form method="post">
		<div>
			<label for="name"> Nom du produit </label>
			<input type="text" id="name" name="name" value="<?=$name ?>">
		</div>
		<div>
			<label for="description"> description du produit </label>
			<textarea id="description" name="description"><?=$description ?></textarea> 
		</div>
		<div>
			<label for="image"> image du produit </label>
			<textarea id="image" name="image" rows="8" cols="80"><?=$image ?></textarea>
		</div>
		<div>
			<label for="price"> prix du produit </label>
			<input type="text" id="price" name="price" value="<?=$price ?>">
		</div>
		<div>
			<button type="submit">Envoi</button>
		</div>
</form>