<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index - Landing Page</title>
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
    <header class="bg-dark">
        <div class="text-center text-light p-3">
            <span class="">HEADER</span>
        </div>
    </header>
    <hr>
    <!-- Navbar -->
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Register</a>
            </li>
        </ul>
    </nav>
    <hr>
    <!-- Php -->
    <?php 
	if(isset($_GET['p'])){
		$page = $_GET['p'];
		switch ($page) {
			case 'home':
				include "pages/home.php";
				break;
			case 'about':
				include "pages/tentang.php";
				break;
			case 'contact':
				include "pages/contact.php";
				break;			
			default:
				echo "<center><h3>Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
    ?>
    <!-- Content -->
    <div class="container text-center">
        <h2>Selamat Datang</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, quas. Quo, quidem. Quod, quibusdam. Quibusdam, iusto! Doloribus, accusamus. Aliquid, dolorum!</p>  
    </div>
    <hr>
    <!-- Footer -->
    <footer class="bg-dark">
        <div class="text-center text-light p-3">
            <span class="">FOOTER</span>
        </div>
    </footer>
<!-- Link Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>