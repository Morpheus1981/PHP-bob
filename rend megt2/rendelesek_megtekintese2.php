

<html>
<head>
	<meta charset="utf-8">
	<title>Bob autóalkatrészek- Megrendelések</title>
	</head>
	<body>
	<h1>Bob autóalkatrészek</h1>
	 <h2> Megrendelések</h2>
<?php

$rendelesek= file("rendelesek.txt");

$rendelesek_szama = count($rendelesek);

if ($rendelesek_szama == 0) {
	echo "<p><strong> Nincs függő rendelés.
			Kérjük, próbálkozzon később!</strong></p>";
		}
		echo "<table border=\"1\">\n";
		echo "<tr><th bgcolor=\"green\">Rendelés időpontja</th>
			 <tr><th bgcolor=\"green\">Gumiabroncs</th>
				<tr><th bgcolor=\"green\">Olaj</th>
				<tr><th bgcolor=\"green\">Gyertya</th>
				<tr><th bgcolor=\"green\">Végösszeg</th>
				<tr><th bgcolor=\"green\">Szállítási cím</th>
			 
			 </tr>";
			 
			 for ($i=0; $i<$rendelesek_szama; $i++) {
				 $sor = explode("\t", $rendelesek[$i]);
				 
				 $sor[1] = intval ([sor[1]);
				 $sor[2] = intval ([sor[2]);
				 $sor[3] = intval ([sor[3]);
		
		echo "<tr>
				<td>".$sor[0]."</td>td>
				<td align=\"right\">".$sor[1]."</td>
				<td align=\"right\">".$sor[2]."</td>
				<td align=\"right\">".$sor[3]."</td>
				<td align=\"right\">".$sor[4]."</td>
		
			<td>".$sor[5]."</td>
			</tr>";
		}
		echo "</table>";
		?>
		</body>	 


</html>
