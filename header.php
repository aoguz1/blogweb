<?php 
session_start(); ?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>blog</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:800" rel="stylesheet">
<link rel="stylesheet" href="css/modaal.css">


	<script src="https://cdn.ckeditor.com/4.11.2/standard-all/ckeditor.js"></script>
	
	<script src="js/granim.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>



	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<nav>
		<div class="nav-wrapper navbar ">
			<div data-target="slide-out" class="sideNavMenu sidenav-trigger"><i class="material-icons">clear_all</i></div>
			<a href="index.php" class="logo" ><i class="fas fa-home"></i></a>
			<div class="navSearchD ">
				<input type="text" placeholder="Arama Yapın" class="navSearch" name="navSearch">
			</div>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<?php if (isset($_SESSION['user'])) {?>
					<a  class="btn waves-effect waves-light loginOut" href="loginOut.php">Çıkış yap</a>
				<?php } else{?>   
					<button id="tikla" data-target="modal1"  class="btn waves-effect waves-light modal-trigger" type="button" name="action">Giriş Yap</button>
				<?php } ?>
			</ul>

		</div>
	</nav>
	<!--sidebar-->


	<div id="slide-out" class="sidenav indexSideNavMenu">
		<?php if (isset($_SESSION['user'])) {?>
			<div class="sidenavUsersInfo">
				<i class="fas fa-user-circle"></i>
				<p class="sidenavUserName"><?php echo $_SESSION['user']; ?></p>
			</div>


			<div class="sidenavUserMenu">
				<ul>
					<li><a  href="text.php"><i class="fas fa-pen-nib"></i>Yazını Yaz</a></li>
					<li><a href=""><i class="fas fa-book-open"></i>Yazdıklarım</a></li>

				</ul>
			</div>


		<?php } ?>

		<div class="indexSideNavCategories">

			<ul class=" with-header">
				<li class="collection-header"><a href=""><i class="fas fa-list"></i>Kategoriler</a></li>
				<li class="collection-item"><a href=""><i class="fab fa-js-square"></i>Javascript</a></li>
				<li class="collection-item"><a href=""><i class="fab fa-html5"></i>HTML</a></li>
				<li class="collection-item"><a href=""><i class="fab fa-css3-alt"></i>CSS</a></li>
				<li class="collection-item"><a href=""><i class="fab fa-php"></i>PHP</a></li>
			</ul>

		</div>

		<div class="sideNavFooter grey-text">
			<ul>
				<li><a href="">Yazarlar</a></li>
				<li><a href="">Hakkımızda</a></li>
				<li><a href="">Yardım</a></li>
			</ul>

		</div>


		<canvas id="sidenavCanvasBanner"></canvas>
	</div>
	<!--sidebar-->