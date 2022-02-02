<head>
	<title>Sykemittari</title>
	<meta charset="UTF-8">
	<style>
		.pvm_tittle {
			text-align: center;
			position: relative;
			margin: 1px 0 0px 50%;
			background-color: lightgrey;
			width: 5%;
			right: 100px;
		}
		.pvm {
			text-align: center;
			position: relative;
			margin: -10px 0 0px 50%;
			background-color: lightgrey;
			width: 5%;
			right: 100px;
			top: -40;
		}
		.arvo_tittle {
			text-align: center;
			position: relative;
			margin: 1px 0 0px 50%;
			background-color: lightgrey;
			width: 5%;
			top: -37px;
		}
		.arvo {
			text-align: center;
			position: relative;
			margin: 1px 0 0px 50%;
			background-color: lightgrey;
			width: 5%;
			top: -59px;
		}
		.otsikko {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
	header("refresh: 10;");
	$hostname = "localhost";
	$username = "root";
	$password = "HyTe";
	$db = "Tiedot";
	$dbconnect=mysqli_connect($hostname,$username,$password,$db);
	if ($dbconnect->connect_error) {
		die("Database connection failed: " . $dbconnect->connect_error);
	}
	?>
	<p></p>
	<div class="otsikko">
		<h1>Sykemittari</H1>
	</div>
	<div class="pvm_tittle">
		<h2>PVM</h2>
	</div>
	<div class="pvm">
	</div>
	<div class="arvo_tittle">
		<h2>BPM</h2>
	</div>
	<div class="arvo">
	</div>
	<?php
	$query = mysqli_query($dbconnect, "SELECT * FROM Mittari ORDER BY Id DESC LIMIT 8")
		or die (mysqli_error($dbconnect));
			
	while ($row = mysqli_fetch_array($query)) {
		echo
			"<div class='pvm'>
				{$row['pvm']}
			</div>
			<div class='arvo'>
				{$row['arvo']}
			</div>\n";
		}
	?>

</body>
