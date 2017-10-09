<div id="page">
	<div id="content">
		<div class="box">
			<h2>Liste des artistes</h2>
			<section>
			<?php		
			If (!empty( $_SESSION['connexion'])) // si quelqu'un est connecté
			{ ?>
				<a class="btn" href='index.php?uc=Artistes&action=ajouter'>Ajouter un artiste</a>
			<?php } ?>
			<table><tr><th>Numéro</th><th>Nom</th><th>actions</th></tr>
			<script>
			function supprArtiste(id) {
				if(confirm("Voulez vous vraimer supprimer cet artiste. Attention la suppression de l'artiste entrainera la suppression de tous ses albums ?"))
				{
					location.href='index.php?uc=Artistes&action=supprimer&numart='+id;
				}
				else {
					alert("l'artiste n'a pas été supprimé.");
				}
			}
			</script>
			<?php
			foreach($lesArtistes as $Artiste) //parcours du tableau d'objets récupérés
			{ 	$idArt=$Artiste->getId();           
				$nom=$Artiste ->getNom();?>
			<tr>
			<td width=5%><?php echo $idArt?></td><td width=80%><?php echo $nom?></a></td><!--affichage dans des liens-->
			<td class='action' width=15%>
				<a href='index.php?uc=Albums&action=artiste&numart=<?php echo $idArt ?>' class="imageRechercher" title='Voir la liste des albums'></a>
				<?php		
				//If (!empty( $_SESSION['connexion']))  si quelqu'un est connecté
				//{ ?>	
					<a href='index.php?uc=Artistes&action=modifier&numart=<?php echo $idArt ?>' class="imageModifier" title="modifier l'artiste"></a>
					<span class="imageSupprimer" onclick="javascript:supprArtiste('<?php echo $idArt ;?>')" title="supprimer l'artiste" ></span> <!-- on met un span pour pouvoir invoquer le on click -->
				<?php // } ?>
			</td>

			</tr>
			<?php
			}
			?>
			</table>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>

