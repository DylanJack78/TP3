<div id="page">
	<div id="content">
		<div class="box">
			<?php
			echo "<h2>Les albums de ".$Artiste->getNom()."</h2>";
			include("/vues/v_albums.php");//puis on affiche la vue qui utilise les données
			?>