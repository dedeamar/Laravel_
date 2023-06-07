<!DOCTYPE html>
<html>
<head>
	<meta charset="uf-8">
	<meta charset="viewport" content="width=device-width, intial-scale=1">
	<title>Toko DD</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
{{-- css --}}
<style>
    body {
        background-color: rgb(193, 212, 220)
    }
* {
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}
a {
	color: inherit;
	text-decoration: none;
}
.medsos {
	padding:5px 0;
	background-color: #63d1ca;
}
.medsos ul li {
	display: inline-block;
	color: #fff;
	margin-right: 10px;
}
.container {
	width:80%;
	margin:0 auto;
}
.container:after {
	content:'';
	display: block;
	clear: both;
}
header h1 {
	float: left;
	padding:15px 0;
	color: #307b76;
}
header ul {
	float: right;
}
header ul li {
	display: inline-block;
}
header ul li a {
	padding:25px 20px;
	display: inline-block;
	transition: 0.5s;
}
header ul li a:hover {
	background-color: #236c67;
	color: #fff;
	transform: scale(0.98);
}
.active {
	background-color: #358983;
	color: #fff;
}
.banner {
	height: 60vh;
	background-image: url('../img/banner.jpg');
	background-size: cover;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
    background-color: #236c67;
}
.banner:after {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: rgba(0, 193, 179, .4);
}
.banner h2 {
	color: rgb(255, 255, 255);
	z-index: 1;
	padding: 20px 25px;
	border:3px solid #fff;
}
section {
	padding: 50px 0;
}
section h3 {
	text-align: center;
	padding: 20px 0;
	color:#307d78;
}
section {
	padding: 50px 0;
}
section h3 {
	text-align: center;
	padding: 20px 0;
	color: #297c76;
	margin-bottom: 25px;
}
.about,
.service {
	padding-bottom: 100px;
}
.about p {
	color:#666;
	word-spacing: 2px;
	line-height: 25px;
}
.service {
	background-color: #f9f9f9;
}
.box {
	color:#00C1B3;
}
.box:after {
	content: '';
	display: block;
	clear: both;

}
.box .col-4 {
	width: 25%;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
.box .col-7 {
	width: 14%;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
.icon {
	width: 70px;
	height: 70px;
	border: 1px solid;
	border-radius: 50%;
	text-align: center;
	line-height: 70px;
	font-size: 20px;
	margin:0 auto;
}
.box .col-4 h4 {
	margin:20px 0;
}
.box .col-7 h4 {
	margin:25px 0;
}
footer {
	padding:30px 0;
	background-color: #333;
	color: #fff;
	text-align: center;
}
.label {
	background-color: #29635f;
	color: #fff;
}
.gambargerak {
	margin: 100px;
}
@keyframes puterin {
	100% {
		transform: rotate(360deg);
	}
}

body {margin:0; font-family: sans-serif;}

.gambar {width: 90%; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr}

.gambar .foto img{width: 315px;}

.foto {border:1px black; margin:10px; text-align: center;}

.foto a:hover {
	background-color: green;
	color: #fff;
}

.foto a{border:1px solid green; padding:10px; color: white; background: #00C403;  text-decoration: none; border-radius: 20px; cursor: pointer;}

.foto {border: 1px solid #357b77; margin:10px;}

.foto p {
	color:#FF7476;
}

.foto h2 {
	color:#505050 ;
}

.rekomendasi {
	text-align: center;
	color: #3d7c78;
	margin-bottom: 25px;
}
.rekomendasi h3{padding:4px; color: white; background: #428682;  text-decoration: none; cursor: pointer;}

.kategori {
	padding-bottom: 1px;
}

.kategori {
	background-color: #f9f9f9;
}
.info {
	text-align: center;
	color: #D5D5D5;
	padding: 176px;
}
.info h3 a{
color: #767676 ;
}
</style>
	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">Toko DD</a></h1>
			<ul>
				<li class="active"><a href="index.html">HOME</a></li>
				<li><a href="BELANJA.html">BELANJA</i></a></li>
				<li><a href="KERANJANG.html"><i class="fas fa-shopping-basket"></i></a></li>
				<li><a href="SIGN.html">Sign Up</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2><a href="BELANJA.html">WELCOME TO MY TOKO</a></h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fas fa-mobile"></i></div>
					<h4>MOBILE APP</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-globe"></i></div>
					<h4>WEB DEVELOPER</h4>
				</div><div class="col-4">
					<div class="icon"><i class="fas fa-edit"></i></div>
					<h4>DESIGN</h4>
				</div><div class="col-4">
					<div class="icon"><i class="fas fa-chart-bar"></i></div>
					<h4>DIGITAL MARKETING</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>dede amar 2023.</small>
		</div>
	</footer>
</body>
</html>
