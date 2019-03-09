<?php 
include 'header.php';


$textId=61;
$textBook = $bag->cek("","text","*","WHERE id=?", array($textId));
$textBookInfo=$textBook->fetch(PDO::FETCH_OBJ);
	//print_r($textBookInfo);

?>

<div class="textBookBanner">

	<div class="draftBookBanner">
		<div class="textBookHeader"><?php echo $textBookInfo->header; ?> <br><h5 id="textbookHeaderGit"></h5></div>

		<div class="textBookUser">
			<div class="row">
				<div class="col s5"><div class="textBookUserImg z-depth-4"></div></div>
				<div class="col s7">
					<p class="textBookHeaderName"><?php echo $textBookInfo->username; ?></p>
					<p class="textBookHeaderDate">Haz 03 2019</p>
				</div>
			</div>
		</div>

		<div class="textBookHeaderBannerTypeLogo  z-depth-5"><img src="img/js-logo.svg" alt=""></div>


	</div>




</div>

<div class="containerText">
	<div class="row">
		<div class="col s12">
			<div class="textBookContent"> <?php echo $textBookInfo->content; ?></div>
		</div>



		<div class="col s12">
<!-- <iframe id="textBookMarkdown" src="markdown.php" " frameborder="0"></iframe>-->	
<div id="markdownGıthub"></div>

 	</div>

	</div>
<script>
	$(document).ready(function () {
		
	

	



});
</script>



	<?php 
	
	include 'footer.php';
	?>