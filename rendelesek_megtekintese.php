<?php

$fp = ["rendelesek.txt"];
//$DOCUMENT_ROOT = $_SERVER['rendelesek.txt'];

 ?>
 <!DOCTYPE html>
 <html lang="hu">
   <head>

     <title>Bob autóalkatrészek -Megrendelések</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="stylemegtek.css">
   </head>
   <body>
<h1>Bob autóalkatrészek</h1>
<h2>Megrendelések</h2>
<?php

$fp = fopen("rendelesek.txt", 'rb');
if (!$fp) {
  echo "<p><strong>Nincsen függő megrendelés.
  Kérjük, próbálkozzon később!</strong></p>";
  exit;
}
while (!feof($fp)) {
  $megrendeles= fgets($fp, 999);
  echo  $megrendeles."<br />";
}
 ?>
 </body>
 </html>
