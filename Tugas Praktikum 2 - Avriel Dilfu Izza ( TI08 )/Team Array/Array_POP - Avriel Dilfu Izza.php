<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ELSKUI', 'Avriel', 'Dilfu', 'Izza'];
	array_pop($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>