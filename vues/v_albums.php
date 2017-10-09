
			<section>
			<table><tr><th>Numéro</th><th>Titre</th><th>Année</th><th>Genre</th><th>actions</th></tr>
			<?php 
				foreach($lesAlbums as $Album) //parcours du tableau d'objets récupérés
				{ 	
				$id=$Album->getId();           
				$titre=$Album ->getNom();
				$annee=$Album ->getAnnee();
				$genre=$Album ->getGenre();
			?>
				<tr>
					<td width=5%><?php echo $id?></td><td width=80%><?php echo $titre?></td><td><?php echo $annee?></td><td><?php echo $genre?></td><!--affichage dans des liens-->
					<td class='action' width=15%>
						<!-- à compléter pour voir un albums (nom et morceaux)
						pour supprimer un album et pour modifier un album -->
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


