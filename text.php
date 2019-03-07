<?php include 'header.php'; ?>

<img  class="textBanner" src="img/textBanner.svg" alt="">



<form method="post" id="textForm">


	<div class="row">
		<div class="textGrid">
			

			<div class="input-field col s5  ">
				<i class="fas fa-pen-nib prefix"></i>
				<input id="textHeader" type="text" name="textHeader"data-error=".errTextHeader" class="validate">
				<label for="textHeader">Konunun başlığını giriniz</label>
				<div class="errTextHeader"></div>
			</div>
			<div class="input-field col s5  ">
				<i class="fab fa-github prefix"></i>
				<input id="gitHub" type="text" name="textGit" data-error=".errgitHub" class="validate">
				<label for="gitHub">Github dökümanı için linki buraya yapıştır :)</label>
				<div class="errgitHub"></div>
				<a class="helper-text right-align inline" href="markdown.php">önizlemek için tıklayın</a>
			</div>

			
			<div class="col s2 textButtonGrid">
				
				<button class="waves-effect waves-light btn-large" type="submit">gönder</button>
				
<!-- <input type="submit"class="waves-effect waves-light btn" placeholder="gönder">
-->

</div>
</div>


</div>
<div class="input-field col s12">
	<textarea name="textcontent" id="editor1" cols="30" rows="10" data-error=".errTextContent"></textarea>

	<div class="errTextContent"></div>
</div>
</div>
</form>



<!-- modal -->






<script src="js/modaal.js"></script>
<script src="https://cdn.ckeditor.com/4.11.2/standard-all/ckeditor.js"></script>
<script>

	$(document).ready(function(){
		$('select').formSelect();
		$('select').show();
	});


	CKEDITOR.replace('editor1',{

		extraPlugins: 'codesnippet , autogrow',
		codeSnippet_theme :'monokai_sublime',
		uiColor:"whitesmoke",
		autoGrow_minHeight :250,
		autoGrow_maxHeight: 550,
			//toolbar : 'Basic'
			toolbarGroups : [

			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
			{ name: 'links', groups: [ 'links' ] },
			{ name: 'insert', groups: [ 'Image'] },
			{ name: 'styles', groups: [ 'styles' ] },
			{ name: 'colors', groups: [ 'colors' ] },
			{ name: 'tools', groups: [ 'tools' ] },
			{ name: 'others', groups: [ 'others' ] },

			],
			removeButtons :'Source,Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Redo,Undo,Find,Replace,SelectAll,Scayt,Form,Radio,TextField,Textarea,Button,ImageButton,HiddenField,Checkbox,Subscript,Superscript,CopyFormatting,CreateDiv,Language,BidiRtl,BidiLtr,Flash,SpecialChar,Iframe,PageBreak,Font,ShowBlocks,About,Select,Styles'


		});



	//$("nav").css("background","#264452");

	$('.inline').modaal({
		type: 'ajax',
		loading_content: 'Yükleniyor...'
	});




</script>




<?php 

include 'footer.php';
?>