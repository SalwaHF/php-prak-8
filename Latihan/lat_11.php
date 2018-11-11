<?php
	$a = "USS Enterprise";
	$b = "Menurut Catatan Kapten"; 
	$c = "Menguji Planet Vulcan";

	$alt1 = $a . "" . $c . "," . $b . ".";
	$alt2 = $b . "" . $a . "," . $c . ".";
?>
<!DOCTYPE html>
<html>
<head>
 	<title>Menggabungkan String</title>
</head>
<body>
	String Yang Pertama Adalah : <br>
 	<?php
 		echo $alt1; 
  	?>
  	<br><br>
  	String Yang Kedua Adalah : <br>
  	<?php
 		echo $alt2; 
  	?>
</body>
</html>