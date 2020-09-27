
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


	echo '<p>Rendelése az alábbi: </p>';
	echo $abroncs_db.' gumiabroncs<br />';
	echo $olaj_db.' flakon olaj<br />';
	echo $gyertya_db.' gyújtógyertya<br />';
	echo ("------------------------------------ </br >");
	echo (" ");

	/*$valtozo_neve ='abroncs_db';
	$$valtozo_neve = 5;
	
	echo $abroncs_db; */
	
	




	echo '<p>Rendelése az alábbi: </p>';
	echo $abroncs_db.' gumiabroncs<br />';
	echo $olaj_db.' flakon olaj<br />';	
	echo $gyertya_db.' gyújtógyertya<br />';
		echo ("------------------------------------ </br >");
	echo (" ");	$osszmennyiseg = 0;
	$osszmennyiseg = $abroncs_db + $olaj_db + $gyertya_db;
	echo "Rendelt termékek száma: ". $osszmennyiseg. "</br>";
	$vegosszeg	= 0.00;








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
	
	echo "Részösszeg: $".number_format($vegosszeg, 2)."</br>";
	$adokulcs = 0.10; // a helyi forgalmi adó 10%
	$vegosszeg =$vegosszeg* (1+ $adokulcs);
	echo "Végösszeg áfával: $".number_format($vegosszeg,2)."</br>";


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


  </body>
</html>
