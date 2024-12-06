<?php
session_start();

require 'spoj.php';
?>

<!DOCTYPE html>
<html lang="hr">
<head>
	<link rel="icon" type="image/x-icon" href="/slike/logo.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

	<!-- Početak zaglavlja -->
    <div class="container text-center mt-4">
        <img src="slike/logo.jpg" alt="Logo" class="header-image">
        <h1 class="mt-2">RESTORAN</h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
					<li class="nav-item active"><a class ="nav-link" href="index.html">Početna</a></li>
                    <li class="nav-item"><a class="nav-link" href="galerija.html">Galerija</a></li>
                    <li class="nav-item"><a class="nav-link" href="onama.html">O nama</a></li>
                    <li class="nav-item"><a class="nav-link" href="jelovnik.html">Jelovnik</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Rezervacija</a></li>
					<li class="nav-item"><a class="nav-link" href="admin_login.html">Prijava (Administrator)</a></li>
                    <li class="nav-item-right"><a class="nav-link">
                        <?php if(isset($_SESSION['prijavljen'])) echo htmlspecialchars($_SESSION['ime'] . ' ' . $_SESSION['prezime']); 
                    else{
                        echo htmlspecialchars(' ');
                    }
                    ?></a></li>
                    <li class="nav-item-right"><a class="nav-link" href="Odjava.php">
                        <?php if(isset($_SESSION['prijavljen'])) echo htmlspecialchars('Odjava');
                    else {
                        echo htmlspecialchars(' ');
                    }
                    ?></a></li>

                </ul>
            </div>
        </div>
    </nav>
	<!-- Kraj zaglavlja -->
    <!-- Početak ukratko o nama -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="slike/kuhar.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Ukratko o nama <span></span></h1>
						<p>U našoj kuhinji skloni su iznenađenjima i inovacijama,
						pa pretežito stalni gosti imaju osjećaj da se meni neprestano obnavlja, osvježava i dopunjuje.</p>
						<p>Bogata i stručno odabrana vinska lista posve je u skladu s gastronomskim ugledom, 
						kojeg eminentni gastro stručnjaci godinama svrstavaju u sam vrh ugostiteljstva u Hrvatskoj.</p>
						<a class="button" href="onama.html">Više o nama</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Kraj ukratko o nama -->
	<br>
	<br>
	<!-- Početak Menu-a -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h1>Specijalni Menu</h1>
						<p>Bogata ponuda jela i pića. Ovo su samo neka od omiljenih jela naših gostiju.</p>
					</div>
				</div>
			</div>
			
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/jaja.jpg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Doručak 1</h4>
							<p>Pečena jaja sa šunkom ili slaninom</p>
							<h5> 5 €</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/sunka.jpeg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Doručak 2</h4>
							<p>Omlet sa šunkom i sirom ili s povrćem po izboru</p>
							<h5> 5 €</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/tost.jpg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Doručak 3</h4>
							<p>Toast sendvič sa šunkom i sirom</p>
							<h5> 5 €</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/pecenje.jpg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Ručak 1</h4>
							<p>Teleće pečenje s pečenim krumpirom </p>
							<h5> 10 €</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/tuna1.jpeg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Ručak 2</h4>
							<p>Pršut od dimljene tune, brusketa, hren, klice</p>
							<h5> 10 €</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/vjesalice1.jpg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Ručak 3</h4>
							<p>Punjena vješalica</p>
							<h5> 10 €</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/torta.jpg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Desert 1</h4>
							<p>Čokoladna torta </p>
							<h5> 3 €</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/tris.jpg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Desert 2</h4>
							<p>Tris čokolada</p>
							<h5> 3 €</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="gallery-single fix">
						<img src="slike/palacinke.jpg" width="800" height="480" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Desert 3</h4>
							<p>Palačinke (razni nadjevi)</p>
							<h5> 2,5 €</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Kraj Menu-a -->
	
	<!-- Početak kontakta -->
		<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Telefon</h4>
						<p class="lead">
							091 33 55 302
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							restoran@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Lokacija</h4>
						<p class="lead">
							Vukovarska 5, Osijek
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Kraj kontakta -->

	<!-- Početak podnožja -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>O nama</h3>
					<p>U elegantnom ambijentu restorana uživajte u izboru gotovih jela, jela po narudžbi te izboru specijaliteta sa roštilja na drveni ugljen. U sklopu restorana Lipa nalazi se dvorana u kojoj, osim klasičnih ručkova organiziramo i sve vrste svečanosti.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Radno vrijeme</h3>
					<p><span class="text-color">Ponedjeljak-Petak: 9:00 h - 22:00 h</p>
					<p><span class="text-color">Subota-Nedjelja: 12:00 h - 21:00 h</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Kontakt informacije</h3>
					<p class="lead">Vukovarska 5, Osijek</p>
					<p class="lead"><a href="#">091 33 55 302</a></p>
					<p><a href="#"> restoranlipa@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Pretplatite se</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Adresa..." type="email">
							<button type="submit" class="submit">PRETPLATI SE</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">&copy; Anastasia Šmrčković</p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- Kraj podnožja -->


	<script src="script.js"></script>

</body>
</html>