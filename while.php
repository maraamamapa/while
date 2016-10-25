<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
<body>
<center>
<h2>Tabla del 2</h2> 
<?php
 $i=1;
 echo "<table border='4' cellpadding='4' cellspacing='1'>\n";
 echo "<td>MULTIPLICACION</td><td>RESULTADO</td>\n</tr>\n";
    while ($i<= 30) {
		echo "<tr align='center'>";
        $tabla=$i*2;
		
      echo "<td>"."2 x $i "."</td><td>".$tabla."</td></tr>\n";
      $i++;
    }
	echo "</table>\n";
	
?>
</center>
</body>
</html>