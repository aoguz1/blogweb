<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>blog</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Poppins:800" rel="stylesheet">

	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/ajax.js"></script>
	<style>
		
 #particles-js{ position:absolute; width: 100%; height: 100%; background-color: #b61924; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; }

	</style>
</head>
<body>
	
	<nav>
		<div class="nav-wrapper navbar ">
			<div class="sideNavMenu"><i class="material-icons">clear_all</i></div>
			<a href="#" ><i class="fas fa-home"></i></a>
			<div class="navSearchD ">
				<input type="text" placeholder="Arama Yapın" class="navSearch" name="navSearch">
			</div>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<button class="btn waves-effect waves-light" type="submit" name="action">Giriş Yap</button>
			</ul>

		</div>
	</nav>

<div class="index-banner">
		
	<canvas id="canvas-basic"></canvas>
<div id="particles-js">
	
</div>

	


</div>




	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="js/particles.js"></script>
<script src="js/granim.js"></script>
	<script src="js/login.js"></script>
	<script src="js/js.js"></script>
<script>
	let banner = $( window ).height()-$( ".navbar" ).height();

	$(".index-banner").height(banner);


	var granimInstance = new Granim({
    element: '#canvas-basic',
    direction: 'diagonal',
    isPausedWhenNotInView: true,
    states : {
        "default-state": {
            gradients: [
                ['#1d3e45', '#144a55'],
                ['#1d4d42', '#2c4f4d'],
                ['#2e2f49', '#1d3e45']
            ]
        }
    }
});
	/*
	*
	*
	* PARTİCLES
	*
	*/
particlesJS.load('particles-js', 'particlesSetting.json', function() {
  console.log('çalıştı');
});


</script>

</body>
</html>