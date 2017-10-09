<div id="page">
	<div id="content">
		<div class="box">
		<?php
		// si la variable $_REQUEST['numart'] est vide c'est qu'il s'agit d'un nouvel artiste à créer
		if(!empty($_REQUEST['numart'])){ // si on demande une modification d'un artiste
			$LeArtiste=Artist::findById($_REQUEST['numart']); // trouve l'artiste et on renvoie un objet Artist
		}
		?>
			<h2>Fiche Artiste</h2>
			<section>
				<form action='index.php?uc=Artistes&action=VerifForm' method='post'>
				<input type='hidden' name="idArtiste" value='<?php if(!empty($_REQUEST['numart'])){echo $LeArtiste->getId();}?>'>
				<label for "nomArtiste">Nom de l'artiste</label> <input type="text" name="nomArtiste" id="nomArtiste" 
				value="<?php if(!empty($_REQUEST['numart'])){echo $LeArtiste->getNom();} ?>">
				<input type="submit" value="<?php if(!empty($_REQUEST['numart'])){echo "Modifier l'artiste";}else{echo "Ajouter l'artiste";} ?>" />
				</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>

