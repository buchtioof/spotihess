<?php include 'connectDB.php';?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
</head>

<body>
	<div class="navbar">
		<img class="logo" src="https://i.pinimg.com/236x/ff/3e/b5/ff3eb566b2a46375932ff7094963af14.jpg?nii=t" />
		<div class="txtlogo">
			<h1>Spotihess</h1>
			<p>The most goofiest bangers online !</p>
			<a href="liked.php">Favoris</a>
			<a href="add.php">Ajouter une musique</a>
		</div>
	</div>
	<h2>Dernieres sorties</h2>
	<div class="content">
		<?php include 'released.php';?>
		<?php include 'popular.php';?>
	</div>
	<?php include 'popup.php';?>
	<div class="bottomplayer" style="position:fixed;
   left:0px;
   bottom:0px;">
		<div id="iframeHolder"></div>
	</div>

</body>

</html>
