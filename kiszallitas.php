
<html>
<meta charset="utf-8">

  <body>
    <table border ="0" cellapadding ="3">
      <tr>
        <td bgcolor="#CCCCCC" align="center">Távolság</td>
        <td bgcolor="#CCCCCC" align="center">Költség</td>
      </tr>
      <?php
      $tavolsag = 50;
      while ($tavolsag <= 250) {
        echo "<tr>
        <td align=\"right\">".$tavolsag."</td>
        <td align=\"right\">".($tavolsag /10)."</td>
        </tr>\n";
$tavolsag += 50;
}
      ?>

    </table>

  </body>
</html>
