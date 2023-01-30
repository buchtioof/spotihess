<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anucfan";
	
// connect the database with the server
$mysqli = new mysqli($servername,$username,$password,$dbname);
	
	// if error occurs
	if ($mysqli -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
	}

	$sql = "select * from songs";
	$result = ($mysqli->query($sql));
	//declare array to store the data of database
	$row = [];
		// fetch all data from db into array
		$row = $result;
?>

<!DOCTYPE html>
<html>
    <style>
        td,
        th {
            border: 1px solid black;
            padding: 10px;
            margin: 5px;
            text-align: center;
        }

        .row {
            align-items: stretch;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
            padding:50px;
        }

        .card {
            /*float: left;*/
            max-width: 33.333%;
            padding: .75rem;
            border-radius:30px;
            margin-right:30px;
            margin-bottom: 2rem;
            border: 0;
            flex-basis: 33.333%;
            flex-grow: 0;
            flex-shrink: 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .card>img {
            margin-bottom: .75rem;
            width: 50%;
        }

        .card-text {
            font-size: 85%;
        }
    </style>

    <body>
    <div>
        <div style="padding-bottom:50px;">
            <img src="/images/homeimg.png" style="width:5%;border-radius:100%;" />
            <h1>Spotihess</h1>
            <p>The most goofiest bangers online !</p>
        </div>
        <center>
            <h2 style="text-align:left;">Les sorties les plus hot !</h2>
            <div class="container">
                <div class="row" style="padding-top:15px;">
                    <?php
			            if(!empty($row))
			            foreach($row as $rows)
			                { ?>
                            <div class="card">
                                <img src="<?php echo $rows['img']; ?>">
                                <h2><?php echo $rows['name']; ?></h2>
                                <p class="card-text"><?php echo $rows['duration']; ?></p>
                                <p class="card-text"><?php echo $rows['released']; ?></p>
                                <button><a href="<?php echo $rows['url']; ?>">Lecture</a></button>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </center>
    </body>

    </html>

    <?php
	mysqli_close($mysqli);
?>