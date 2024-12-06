

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
    


    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
    </div>
</div>
</body>
</html>

<?php
session_start();
include 'spoj.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $k_ime = $_POST['k_ime'];
    $lozinka = $_POST['lozinka'];

    $sql = "SELECT * FROM korisnici WHERE k_ime = '$k_ime' AND lozinka = '$lozinka'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['prijavljen'] = true;
        $_SESSION['username'] = $row['k_ime'];
        $_SESSION['ime'] = $row['ime'];
        $_SESSION['prezime'] = $row['prezime'];
        $_SESSION['uloga'] = $row['uloga'];

        if ($_SESSION['uloga'] == 'admin') {
            header('Location: dodaj_proizvod.php');
        } else {
            header('Location: ispis.php');
        }
        exit();
    } else {
        echo "<p>Pogrešno korisničko ime ili lozinka.</p>";
    }
}
?>