<!DOCTYPE html> 
<html lang="en">
		<head>
			<title>Dropdown With Animation</title>
			 
			 <style>
			 	body
{
	background: #666666;
	font-family: sans-serif; 
	
}


.menu 
{
	
	
	margin:100px 30px auto;
	border-radius: 10px;	


}

.menu a
{
	text-decoration: none;
	color: #fff;

}

.menu li
{

	list-style-type: none;
	float: left;
	width: 100px;
	height: 30px;
	padding: 20px;
	background: #333;
	text-align: center;
	cursor: pointer;
	line-height: 30px;
	border-radius: 10px;
	transition-duration: 0.2s; 

}

.menu li:hover
{
	background: #00FFFF;
}

.menu li ul li
{
	position: relative;
	right:60px;
	top: 20px;
}

.menu li ul
{
	display: none;
}



.menu li:hover ul 
{
	display: block;
	animation:drop 1s;
	position: relative;
	height: 50px;
}

@keyframes drop 
{
	0%
	{
		opacity: 0;
		left: -400%;
	}
	50%
	{
		opacity: 1;
		left: -200px;
	}
	100%
	{
		opacity: 1;
		left: 1px;
	}
}
			 </style>
		</head>
		<body>
			<center>
			<!--<marquee><p><b>dalam tahap pengembanggan</b></p></marquee>-->
			<div class="menu">
				<ul>
					<li><a href="index.php">kriptografi <span class="hi"></span></a>
						<ul>
							<li><a href="metodeangkanotelepon.php">No Tepelon</a></li>
							<li><a href="metode_qwerty.php">qwerty</a></li>
							<li><a href="#.php">urutan alfa</a></li>
							<li><a href="rot13_array.php">Rot13</a></li>
						</ul>
					</li>

					<!--
					<li><a> Coming~soon<span class="arrow"></span></a>
						<ul>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
						</ul>
					</li>

					<li><a> Coming~soon<span class="arrow"></span></a>
						<ul>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""> goreng</a></li>
						</ul>
					</li>

					<li><a> Coming~soon<span class="arrow"></span></a>
						<ul>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
						</ul>
					</li>

					<li><a> Coming~soon<span class="arrow"></span></a>
						<ul>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
						</ul>
					</li>

					<li><a> Coming~soon<span class="arrow"></span></a>
						<ul>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
							<li><a href=""> </a></li>
						</ul>
					</li>
				-->
				</ul>		
			</div>
		</center>
		</body>
</html>