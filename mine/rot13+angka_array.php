
<?php 

	error_reporting(E_ALL^(E_NOTICE|E_WARNING));

	$input = $_POST ['input'];
	$key =
	array(
	'a'=>'S',
	'b'=>'T',
	'c'=>'U',
	'd'=>'V',
	'e'=>'W',
	'f'=>'X',
	'g'=>'Y',
	'h'=>'Z',
		
	'0'=>'I',
	'i'=>'0',
		
	'1'=>'J',
	'j'=>'1',

	'2'=>'K',
	'k'=>'2',

	'3'=>'L',
	'l'=>'3',

	'4'=>'M',
	'm'=>'4',

	'5'=>'N',
	'n'=>'5',

	'6'=>'O',
	'o'=>'6',

	'7'=>'P',
	'p'=>'7',

	'8'=>'Q',
	'q'=>'8',

	'9'=>'R',		
	'r'=>'9',

	's'=>'A',
	't'=>'B',
	'u'=>'C',
	'v'=>'D',
	'w'=>'E',
	'x'=>'F',
	'y'=>'G',
	'z'=>'H'			
	);



	//$key = $arrayName = array('2' => a, '22' => b);
	//jika ingin membuat lowercase
	//$input = strtoupper($input);
	$input = strtolower($input);

	//subtitusi kode
	$output = str_replace(array_keys($key), $key, $input);

str_replace(search, replace, subject)
	//menampilkan output
	//echo $output;


?>
<!DOCTYPE html>
<html>
<head>
	<title>ROT13</title>
	 <link rel="icon" type="image/png" href="img/spdy.png">
	 <style type="text/css">

	 .bg
	{
		background-image: url('img/nlpdancbt.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		color: #eee;
	}
	.fl img
    {	
    	/*
    	border-bottom: 4px solid #3498DB;
		border-top:4px solid #3498DB; 
		border-right: 4px solid #3498DB;
		border-left: 4px solid #3498DB;
		*/
		/*/untuk garis/*/
		width: 120px;
		height: 120px;
		margin-top: 5px;
		border-radius: 100px;
    }

	.fdradius
	{
		border-radius: 20px;
		font-family: 'Open Sans Condensed', sans-serif;
		height: 480px;
		width: 800px;
		border-right: 4px solid #3498DB;
        border-left: 4px solid #3498DB;
        border-top: 4px solid #3498DB;
        border-bottom: 4px solid #3498DB;
        border-radius: 100px;
        background-color:rgba(0,0,0,0.7);
        color: #00ffff;
	}
	.inpt
	{
		/*border-top: 4px solid #BF3D3D;
		border-right: 4px solid #BF3D3D;
		border-left: 4px solid #BF3D3D;
		border-bottom:4px solid #BF3D3D;*/	
		background-color:rgba(0,0,225,0.3);
		box-shadow: 1px 1px 50px 4px #00ffff;
		color: 	#eee;
		border-radius: 15px;
	}
	.inpt1
	{
		/*border-top: 4px solid #BF3D3D;
		border-right: 4px solid #BF3D3D;
		border-left: 4px solid #BF3D3D;
		border-bottom:4px solid #BF3D3D;*/
		background-color:rgba(0,0,225,0.3);
		box-shadow: 1px 1px 50px 4px #00ffff;
		height: auto;
		width: auto;
		color: 	#eee;
		border-radius: 5px;
		grid-row-start: ;
		columns: ;
	}
	.jarakjudul
	{
		padding-top: 502px;
	}

	 .btn
    {
    	background: #007A82;
		/*border-top: 4px solid #BF3D3D;
		border-right: 4px solid #BF3D3D;
		border-left: 4px solid #BF3D3D;
		border-bottom:4px solid #BF3D3D;*/
		border-radius: 5px;
		padding: 10px 20px;
		color: #eee;
		 background-color: darkred;
		font-size: 8pt;
		
    }
	 </style>
</head>
<body class="bg">
	<!--
	<center>
		<img src="img/icons/1.png">
		<img src="img/icons/2.png">
		<img src="img/icons/3.png">
		<img src="img/icons/4.png">
		<img src="img/icons/5.png">
		<img src="img/icons/6.png">
		<img src="img/icons/7.png">
		<img src="img/icons/8.png">
	</center>
	-->
	<a href="index.php"><img src="img/icons/left.png"></a>
		 	<!--<center class="fl"><img src="img/md3.gif"></center>-->
		<center>
			<fieldset class="fdradius">
				<marquee align="center" direction="left" scrollamount="10" 
                behavior="alternate"><p><h2>ROT13 + angka 0-9</h2></p></marquee>
				<form action="rot13+angka_array.php" method="POST" class="#">
				<a href="rot13+angka_array.php"><img src="img/icons/monitor.png" style=" width: 50px; height: 50px; margin-bottom: 20px;" ></a>

					<br>
					<center>
						<textarea name="input" rows="6" cols="80" class="inpt" placeholder="Input Plaintext" size='10px' ></textarea><br>
						<button type="submit" class="btn" >TERJEMAHKAN</button>
						<!--<input type="submit" value="Terjemahkan" cols="100" />-->
						<button type="Reset" class="btn">RESET</button>
						<button class="btn"><a href="tutorial13+angka.html" class="btn">Tutorial</a></button>
						<br>
						<center><p><h2>Hasil Enkripsi</h2></p></center>
						<div class="inpt1"><?php echo $output; ?></div>
						<!--<textarea  rows="6" cols="80" class="inpt" placeholder="<?php echo $output; ?>" size='10px' disabled="disabled"></textarea>-->
					</center>
				</form>	
			</fieldset>
		</center>
		
		<footer>
			<center>
				<a href="rot13_array.php"><img src="img/icons/1.png"></a>
				<img src="img/icons/speed.png">
				<a href="rot13+angka_array.php"><img src="img/icons/2.png"></a>
			</center>
			<center><div class=""><table><tr><th><p><u>&copy leoynugadproduction</u></p></th></tr></table></div></center>
	</footer>
</body>
<!--<marquee direction="bottom"><tr><u><b>Masukkan Kata Yang Hendak Diterjemahkan</b></u></tr></marquee> <br>-->
</html>
<!--<textarea disabled="disabled" rows="6" cols="80" class="inpt1" placeholder="Chipertext"><?php  echo $output; ?></textarea>-->