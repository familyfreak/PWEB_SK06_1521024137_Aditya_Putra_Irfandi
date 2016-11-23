<html>
<head>
<title>Aditya Putra Irfandi</title>
<link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>
<?php
	function luaslingkaran()
    {
    	$diameter = 137;
    	$jari = 137/2;
    	$luas = 22/7 * $jari * $jari;
    		echo ("<p><b>Luas Lingkaran</b>");
    		echo ("<br>Diameter = $diameter<br>Jari - Jari = $jari<br>π = 22/7<br> Rumus = π x $jari x $jari<br>Jadi Luas Lingkaran adalah : ".$luas);
    }
    luaslingkaran();
    function kelilinglingkaran()
    {
    	$diameter = 137;
    	$jari = 137/2;
    	$keliling = 2*22/7*$jari;
    		echo ("<p><b>Keliling Lingkaran</b>");
    		echo ("<br>Diameter = $diameter<br>Jari - Jari = $jari<br>π = 22/7<br>Rumus = 2 x π x $jari <br>Jadi Keliling adalah : ".$keliling);
    }
    kelilinglingkaran();
    function volumebola()
    {
    	$diameter = 137;
    	$jari = 137/2;
    	$volume = 4/3*22/7*$jari*$jari*$jari;
    		echo ("<p><b>Volum Bola</b>");
    		echo ("<br>Diameter = $diameter<br>Jari - Jari = $jari<br>π = 22/7<br>Rumus = 4/3 x π x $jari x $jari x $jari <br> Jadi Volume Bola adalah : ".$volume);
    }
    volumebola();
    
?>
</body>
</html>