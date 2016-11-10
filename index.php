<head>



</head>

<body>
	<?php
	
	include('class.php');
	echo "<h2>Fahrzeugdaten von Golf</h2>";
	
	
	
	$golf = new Auto;
	echo "<br><br>";
	$golf->setFarbe('rot');
	echo "<br><br>";
	$golf->Treibstoff('Diesel');
	echo "<br><br>";
	$golf->setBauart('Limousine');
	echo "<br><br>";
	$golf->tankDeckelOeffnen('Diesel');
	
	echo "<br><br><br>";
	echo "<h2>Anzahl Tankfüllungen des Golfes:</h2><br>";
	echo "Das Auto wurde schon $golf->Counter mal getankt";
	
	
	
	echo "<br><br><br><br><br><br>";
	echo "<h2>Fahrzeugdaten von Maserati</h2>";
	$maserati = new Auto;
	$maserati->setFarbe('Schwarz');
	echo "<br><br>";
	$maserati->Treibstoff('Bleifrei');
	echo "<br><br>";
	$maserati->setBauart('Limousine');
	echo "<br><br>";
	$maserati->tankDeckelOeffnen('Bleifrei');
	$maserati->tankDeckelOeffnen('Bleifrei');
	$maserati->tankDeckelOeffnen('Bleifrei');
	
	echo "<br><br><br>";
	echo "<h2>Anzahl Tankfüllungen des Maseratis:</h2><br>";
	echo "Das Auto wurde schon $maserati->Counter mal getankt";
	
	
	
	
	?>


</body>