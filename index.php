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
	<?php
		// Use foreach to access all the courses data
		foreach ($dbfetch as $database) { ?>
			<div class="songbox">
				<img src="<?php echo $database['img']; ?>" style="width:50%">
				<h2><?php echo $database['name']; ?></h2>
				<p><?php echo $database['artist']; ?></p>
				<?php
					if($database['status']=="1")
						// if a course is active i.e. status is 1
						// the toggle button must be able to deactivate
						// we echo the hyperlink to the page "deactivate.php"
						// in order to make it look like a button
						// we use the appropriate css
						// red-deactivate
						// green- activate
						echo "<a href=deactivate.php?id=".$database['id']." class='btn red'>Retirer de vos favoris</a>";
					else
						echo "<a href=activate.php?id=".$database['id']." class='btn green'>Ajouter dans vos favoris</a>";
				?>
				<button id="button">Lecture</button>
				
			</div>
	<?php } // End the foreach loop ?>
	</div>
			
	<?php include 'popup.php';?>
	<div class="bottomplayer" style="position:fixed;
   left:0px;
   bottom:0px;">
		<div id="iframeHolder"></div>
	</div>
	
</body>

</html>