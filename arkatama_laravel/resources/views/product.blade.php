<!DOCTYPE html>
<html>
<head>
	<meta charset="uf-8">
	<meta charset="viewport" content="width=device-width, intial-scale=1">
	<title>produk</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    {{-- css --}}
    <style>
body{
background-color:rgb(217, 237, 244);
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
            background-color: #285278;
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
            color: #285278;;
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
            background-color: #285278;
            color: #fff;
            transform: scale(0.98);
        }
        .active {
            background-color: #285278;
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
            color: #fff;
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
            color:#285278;;
        }
        section {
            padding: 50px 0;
        }
        section h3 {
            text-align: center;
            padding: 20px 0;
            color: #285278;
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
            color:#285278;
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
            background-color: #285278;
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

        .foto {border: 1px solid #00C1B3; margin:10px;}

        .foto p {
            color:#FF7476;
        }

        .foto h2 {
            color:#505050 ;
        }

        .rekomendasi {
            text-align: center;
            color: #285278;;
            margin-bottom: 25px;
        }
        .rekomendasi h3{padding:4px; color: white; background: #285278;  text-decoration: none; cursor: pointer;}

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
			<h1><a href="index.html">Tk.Kerajinan.DD </a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li class="active"><a href="BELANJA.html">BELANJA</a></li>
				<li><a href="KERANJANG.html"><i class="fas fa-shopping-basket"></i></a></li>
				<li><a href="SIGN.html">Sign Up</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>HOME / BELANJA</p>
		</div>
	</section>


	<!-- kategori -->
	<section class="kategori">
		<div class="container">
			<h3>KATEGORI</h3>
			<div class="box">
				<div class="col-7">
					<div class="icon"><i class="fas fa-hamburger"></i></div>
					<h4>MAKANAN</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-mobile-alt"></i></div>
					<h4>ELECTRONIC</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-tshirt"></i></div>
					<h4>FASHION</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-couch"></i></div>
					<h4>ITEM</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-paw"></i></div>
					<h4>PET</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-gamepad"></i></div>
					<h4>GAME</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-random"></i></div>
					<h4>RANDOM</h4> <br><br>
				</div>
			</div>
		</div>
	</section>

	<!-- recomendasi -->
	<div class="rekomendasi">
		<h3>REKOMENDASI</h3>
	</div>

	<!-- beli beli -->
	<div class='gambar'>

	<div class='foto'>
		<img src='C:\laragon\www\arkatama_laravel\resources\css\image\1.jpg'>
		<h2>Jam Tangan R</h2>
		<p>Rp.10.000.000,00</p> <br>
		<a href=''>Buy Now</a>
	</div>

	<div class='foto'>
			<img src='img/baju1.jpg'>
			<h2>Baju Panda</h2>
			<p>Rp.25.000,00</p> <br>
			<a href=''>Buy Now</a>
		</div>

		<div class='foto'>
				<img src='C:\laragon\www\arkatama_laravel\resources\css\image\7n.jpg'>
				<h2>Baju GG</h2>
				<p>Rp.30.000,00</p> <br>
				<a href=''>Buy Now</a>
			</div>

			<div class='foto'>
					<img src='C:\laragon\www\arkatama_laravel\resources\assets\css\image\3.jpg'>
					<h2>Laptop Gaming</h2>
					<p>Rp.30.999.999,00</p><br>
					<a href=''>Buy Now</a>
				</div>

				<div class='foto'>
						<img src='img/laptop2.jpg'>
						<h2>Laptop Apel</h2>
						<p>Rp.20.999.999,00</p><br>
						<a href=''>Buy Now</a>
					</div>

					<div class='foto'>
							<img src='img/sepatu1.jpg'>
							<h2>Sepatu Pink</h2>
							<p>Rp.250.999,00</p><br>
							<a href=''>Buy Now</a>
						</div>

						<div class='foto'>
								<img src='img/sepatu2.jpg'>
								<h2>Sepatu Sport</h2>
								<p>Rp.300.999,00</p><br>
								<a href=''>Buy Now</a>
							</div>

							<div class='foto'>
									<img src='img/mouse.jpg'>
									<h2>Mouse B</h2>
									<p>Rp.90.000,00</p><br>
									<a href=''>Buy Now</a>
								</div><br><br><br><br><br><br>
	</div>

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
			<small>dd amar 2023. All Right reserves.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>
