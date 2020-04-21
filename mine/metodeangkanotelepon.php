<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	error_reporting(E_ALL^(E_NOTICE|E_WARNING));

	$input = $_POST ['input'];
	$key =
	array(
	
/////////////////////////////////////////
		//encriypt angka 2
		'222'	=>	'C', 
		'22'	=>	'B', 
		'2'		=>	'A',
		
		//descriypt huruf / reply
		'a'		=>	'2',
		'b'		=>	'22',
		'c'		=>	'222',
/////////////////////////////////////////
		//encriypt angka 3
		'333' 	=> 	'F',
		'33' 	=> 	'E',
		'3' 	=> 	'D',

		//descriypt huruf / reply
		'd'		=>	'3',
		'e'		=>	'33',
		'f'		=>	'333',
/////////////////////////////////////////
		//encriypt angka 4
		'444'	=>	'I',
		'44'	=>	'H',
		'4'		=>	'G',

		//descriypt huruf / reply
		'g'		=>	'4',
		'h'		=>	'44',
		'i'		=>	'444',
/////////////////////////////////////////
		//encriypt angka 5
		'555'	=>	'L',
		'55'	=>	'K',
		'5'		=>	'J',

		//descriypt huruf / reply
		'j'		=>	'5',
		'k'		=>	'55',
		'l'		=>	'555',
/////////////////////////////////////////
		//encriypt angka 6
		'666'	=>	'O',
		'66'	=>	'N',
		'6'		=>	'M',

		//descriypt huruf / reply
		'm'		=>	'6',
		'n'		=>	'66',
		'o'		=>	'666',
/////////////////////////////////////////
		//encriypt angka 7
		'7777'	=>	'S',
		'777'	=>	'R',
		'77'	=>	'Q',
		'7'		=>	'P',

		//descriypt huruf / reply
		'p'		=>	'7',
		'q'		=>	'77',
		'r'		=>	'777',
		's'		=>	'7777',
/////////////////////////////////////////
		//encriypt angka 8
		'888'	=>	'V',
		'88'	=>	'U',
		'8'		=>	'T',

		//descriypt huruf / reply
		't'		=>	'8',
		'u'		=>	'88',
		'v'		=>	'888',
/////////////////////////////////////////
		//encriypt angka 9
		'9999'	=>	'Z',
		'999'	=>	'Y',
		'99'	=>	'X',
		'9'		=>	'W',

		//deskriypt huruf / reply
		'w'		=>	'9',
		'x'		=>	'99',
		'y'		=>	'999',
		'z'	    =>	'9999',

		
/////////////////////////////////////////
	

	);

	//$key = $arrayName = array('2' => a, '22' => b);
	//jika ingin membuat lowercase
	//$input = strtoupper($input);
	$input = strtolower($input);

	//subtitusi kode
	$output = str_replace(array_keys($key), $key, $input);

	//menampilkan output


?>
<a href="index.php">Go~Back</a>
<p>Perhatian!!</p>
<p>untuk mengantisipasi terjadinya error perulangan karakter pada satu array yang sama pada penterjemah maka diharapkan</p>
<p>setiap karakter dipisahkan dengan 1x spasi,  dan tiap kata dipisahkan dengan 2x spasi</p>
<p>contoh : n_a_m_a_ _s_a_y_a_ _k_u_n_a_l</p>
<form action="metodeangkanotelepon.php" method="POST">
	<textarea name="input" cols="190" placeholder="pisahkan setiap karakter dengan 1x space,  dan setiap kata dengan 2x space" ></textarea><br>
	<input type="submit" value="Encriypt/Descriypt" cols="100" />
	<button><a href="metodeangkanotelepon.php">segarkan</a></button>
<br>
<br>
<br>
<br>
<tr>1ni 4dalah hasilnya</tr> <br>
<textarea disabled="disabled" cols="190"><?php  echo $output; ?></textarea>
</form>
</body>
</html>