<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Discographie</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="js/jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		<?php 
		if(!isset($_REQUEST['uc']))
		{
?>
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
		});
		<?php
		}
		?>
	});
</script>

</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">Bibliothèque Discographique</a></h1>
		</div>
		<div id="slogan">
		<?php If (!empty( $_SESSION['connexion'])) // si quelqu'un est connecté
			{ 
			echo '<a class="btn" href="index.php?uc=administrer&action=deconnexion">se deconnecter</a>';
			}else{
			echo '<a class="btn" href="index.php?uc=administrer&action=connexion">se connecter</a>';
			} ?>			
		</div>
	</div>

