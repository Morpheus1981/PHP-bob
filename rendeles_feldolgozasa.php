
<html>
  <head>
    <meta charset="utf-8">
    <title>Bob autóalkatrészek - Rendelési eredmények</title>
  </head>
  <body>
    <h1>Bob autóalkatrészek</h1>
    <h2>Rendelési eredmények</h2>
    <?php 
    /*rövid változónevek (közepes stílus) létrehozása az első rész az 
     * amit itt létrehozunk majd az egyelő után a $_POST a html -ből való
     * bekérés majd a ['abroncs_db'] a html -ben a name alatt megadott mező kulcsszava.
     * azt hogy GET vagy POST -al kérjük be az adatoka  attól függ hogy hogyan küldjük tovább
     * a bekért adatokat.
     * A bekért adatok mindkét esetben elérhetőek a $_REQUEST['abroncs_db'] tömbelemben is */
    $abroncs_db = $_POST['abroncs_db'];
    $olaj_db = $_POST['olaj_db'];
    $gyertya_db = $_POST['gyertya_db'];
   
   /*$abroncs_db = $_POST['abroncs_db']; utasítás annyit tesz, hogy létrehoz egy új, $abroncs_db
    * nevű változót, és belemásolja a $_POST ['abroncs_db'] tartalmát.*/
   
    ?>
   
   
    
    <?php
    
    
    /*konstansok létrehozása define függvénnyel állandók nevüket nagy
    betűvel írjuk értékük nem változtatható
    amikor állandóra hivathozunk nem kell dollárjel
    */
    define('ABRONCSAR', 100);
    define('OLAJAR', 10);
    define('GYERTYAAR', 4);


    echo "<p>Rendleés feldolgozásának időpontja itt most: ";
    echo date('H:i, jS F Y');
    echo "</p>";
    echo "<p>Rendleés feldolgozásának időpontja: ".date('H:i, jS F Y')."</p>"; 



	/*$valtozo_neve ='abroncs_db';
	$$valtozo_neve = 5;
	
	echo $abroncs_db; */
	
	




	echo '<p>Rendelése az alábbi: </p>';
	echo $abroncs_db.' gumiabroncs<br />';
	echo $olaj_db.' flakon olaj<br />';	
	echo $gyertya_db.' gyújtógyertya<br />';
		echo ("------------------------------------ </br >");
	echo (" ");	
	$osszmennyiseg = 0;
	$osszmennyiseg = $abroncs_db + $olaj_db + $gyertya_db;
	echo "Rendelt termékek száma: ". $osszmennyiseg. "</br>";
	$vegosszeg	= 0.00;
	
	
	


/*
	if ($osszmennyiseg == 0) {
		echo "Egyetlen tételt sem rendelt az alőző oldalon!<br/>";
	}else{
		echo $abroncs_db." Gumiabroncs<br />";
		echo $olaj_db." flakon olaj<br />";
		echo $gyertya_db." gyűjtógyertya<br />";
	}
*/




if ($osszmennyiseg == 0 ) {
	echo "Egyetlen tételt sem rendelt az előző oldalon!<br />";
}else{
if ($abroncs_db > 0)

	echo $abroncs_db.' gumiabroncs<br />';
	
	
	
	
	if ($olaj_db > 0 )
	echo $olaj_db.' flakon olaj<br />';
	if ($gyertya_db > 0 )	
	echo $gyertya_db.' gyújtógyertya<br />';
}





if ($abroncs_db < 10) {
$kedvezmeny = 0;
}	elseif (($abroncs_db >= 10) && ($abroncs_db <= 49)){
$kedvezmeny = 5;
}	elseif (($abroncs_db >= 50) && ($abroncs_db <= 99)){            
$kedvezmeny = 10;
}	elseif ($abroncs_db >= 100)
$kedvezmeny = 15; 











 
	//kódblokk
/*	if($osszmennyiseg == 0) {
		echo '<p style="color:red">';
		echo 'Egyetlen tételt sem rendelt az előző oldalon!';
		echo '</p>';
		}  */
		

		

	/*define('ABRONCSAR', 100);
	define('OLAJAR', 10);
	define('GYERTYAAR', 4);*/
	
	$vegosszeg = $abroncs_db * ABRONCSAR
				+ $olaj_db * OLAJAR 
				+ $gyertya_db * GYERTYAAR;
				
$kedvezmeny1 = $vegosszeg-(($vegosszeg/100) * $kedvezmeny);
				if ($kedvezmeny>0)
				echo "Ön mennyiségi vásárlási kedvezményben részesül: ". "$kedvezmeny". "%". "</br>";
	
	echo "Nettó végösszeg: $".number_format($kedvezmeny1, 2)."</br>";
	$adokulcs = 0.27; // a helyi forgalmi adó 27%
	$vegosszeg =$kedvezmeny1* (1+ $adokulcs);
	echo "Bruttó Végösszeg áfával: $".number_format($vegosszeg,2)."</br>";

$date = date('H:i, jS F Y');

 $kimeneti_sztring = $date."\t".$abroncs_db." gumiabroncs \t".$olaj_db." olaj\t"
 .$gyertya_db." gyújtógyertya\t\$".$osszmennyiseg."\n";

 $fp = fopen("rendelesek.txt", 'a'); 
 fwrite($fp, $kimeneti_sztring);


fclose($fp);

    ?>
          <tr>
<td>Honnan hallott Bob autóalkatrész-boltjáról?</td>
<td><select name="honnan_hallott_rólunk">
	<option value = "a"> Visszatérő vásárló vagyok</option>
	<option value = "b"> Tévéreklám</option>
	<option value = "c"> Telefonkönyv</option>
	<option value = "d"> Ismerőstől, baráttól</option>
</select>
</td>
</tr>

<?php
$honnan_hallott_rolunk = 1;
if ($honnan_hallott_rolunk == "a") {
	echo "<p> Visszatérő vásárló.</p>";
	}elseif ($honnan_hallott_rolunk == "b") {
		echo "<p> Tévéreklámban hallott Bobrl.</p>";
	}else{
		echo "<p>Nem tudjuk, honnan ismeri Bobot.</p>";
	}

?>




  </body>
</html>
