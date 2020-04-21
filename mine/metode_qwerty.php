<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
/*
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	$input = $_POST ['input'];
	$crack =
	array
	(
		'a'=>'Q',
		'Q'=>'A',

		'b'=>'W',
		'W'=>'B',

		'c'=>'E',
		'd'=>'R',
		'e'=>'T',
		'f'=>'Y',
		'g'=>'U',
		'h'=>'I',
		'i'=>'O',
		'j'=>'P',
		'k'=>'A',
		'l'=>'S',
		'm'=>'D',
		'n'=>'F',
		'o'=>'G',
		'p'=>'H',
		'q'=>'J',
		'r'=>'K',
		's'=>'L',
		't'=>'Z',
		'u'=>'X',
		'v'=>'C',
		'w'=>'V',
		'x'=>'B',
		'y'=>'N',
		'z'=>'M'	
	);

	//jika ingin membuat lowercase
	$input = strtolower($input);

	//subtitusi kode
	$output = str_replace(array_keys($crack), $crack, $input);

	//menampilkan output
	*/
?>
<a href="index.php">Go~Back</a>
<form action="metode_qwerty.php" method="POST">
	<textarea name="input" cols="190" placeholder="pisahkan setiap karakter dengan 1x space,  dan setiap kata dengan 2x space" ></textarea><br>
	<input type="submit" value="Encriypt" cols="100" />
	<button><a href="metode_qwerty.php">segarkan</a></button>
<br>
<br>
<br>
<br>
<tr>ini adalah hasilnya</tr> <br>
<textarea disabled="disabled" cols="190"><?php /* echo $output;*/ ?></textarea>
</form>
</body>
<marquee>dalam tahap pegembangan</marquee>
</html>