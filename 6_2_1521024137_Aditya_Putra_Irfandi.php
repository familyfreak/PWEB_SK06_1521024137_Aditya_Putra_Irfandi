<html>
<head>
<title>Aditya Putra Irfandi</title>
<link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>
<?php
    echo("<b>1. Lingkaran</b>");
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
    echo("<br><br><b>2. Persegi Panjang</font></b>");
    function luaspersegipanjang()
    {
        $panjang = 137;
        $lebar = 24;
        $luas = $panjang*$lebar;
            echo ("<p><b>Luas Persegi Panjang</b>");
            echo ("<br>Panjang = $panjang<br>Lebar = $lebar<br>Rumus = Panjang x lebar<br> Jadi Luas Persegi Panjang adalah : ".$luas);
    }
    luaspersegipanjang();
    function kelilingpersegipanjang()
    {
        $panjang = 137;
        $lebar = 24;
        $keliling = 2*$panjang+$lebar;
            echo ("<p><b>Keliling Persegi Panjang</b>");
            echo ("<br>Panjang = $panjang<br>Lebar = $lebar<br>Rumus = 2 x (Panjang + lebar)<br> Jadi Keliling Persegi Panjang adalah : ".$keliling);
    }
    kelilingpersegipanjang();
    function volumebalok()
    {
        $panjang = 137;
        $lebar = 24;
        $tinggi = 10;
        $volume = $panjang*$lebar*$tinggi;
            echo ("<p><b>Volume Balok</b>");
            echo ("<br>Panjang = $panjang<br>Lebar = $lebar<br>Tinggi = $tinggi<br>Rumus = p x l x t<br> Jadi Volume Balok adalah : ".$volume);
    }
    volumebalok();

    echo("<br><br><b>3. Persegi</b></br>");
    function luasPersegi()
    {
        $sisi = 137;
        $luas = $sisi*$sisi;
            echo ("<p><b>Luas Persegi</b>");
            echo ("<br>Sisi = $sisi<br>Rumus = $sisi x $sisi<br>Jadi Luas Persegi adalah : ".$luas);
    }
    luasPersegi();
    function kelilingpersegi()
    {
        $sisi = 137;
        $keliling = 4*$sisi;
            echo ("<p><b>Keliling Persegi</b>");
            echo ("<br>Sisi = $sisi<br>Rumus = 4 x $sisi<br>Jadi Keliling Persegi adalah : ".$keliling);
    }
    kelilingpersegi();
     function volumekubus()
    {
        $sisi = 137;
        $volume = $sisi*$sisi*$sisi;
            echo ("<p><b>Volume Kubus</b>");
            echo ("<br>Sisi = $sisi<br>Rumus = $sisi x $sisi x $sisi<br>Jadi Volume Kubus adalah : ".$volume);
    }
    volumekubus();
    echo("<br><br><b>4. Tabung</b></br>");
    function volumetabung()
    {
        $tinggi = 24;
        $jari = 137/2;
        $volume = 22/7*$jari*$jari*$tinggi;
            echo ("<p><b>Volume Tabung</b>");
            echo ("<br>Tinggi = $tinggi<br>Jari = $jari<br>Rumus = 22/7 x $jari x $jari x $tinggi<br>Jadi Volume Tabung adalah : ".$volume);
    }
    volumetabung();
   function luaspermukaantabung()
    {
        $tinggi = 24;
        $jari = 137/2;
        $volume = 2*22/7*$jari*($tinggi+$jari);
            echo ("<p><b>Luas Permukaan Tabung</b>");
            echo ("<br>Tinggi = $tinggi<br>Jari = $jari<br>Rumus = 2 x 22/7 * $jari ($tinggi + $jari)<br>Jadi luas permukaan Tabung adalah : ".$volume);
    }
    luaspermukaantabung();
?>
</body>
</html>