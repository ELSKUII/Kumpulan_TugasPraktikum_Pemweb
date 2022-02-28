<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ELSKUI', 'Avriel', 'Dilfu', 'Izza'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>