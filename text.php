<?php include 'header.php'; ?>

<form action="">


	<div class="row">
		<div class="textGrid">
			<div class="col s6">
				<div class="row">
					<div class="input-field col s12  ">
						<i class="fas fa-pen-nib prefix"></i>
						<input id="textHeader" type="text" class="validate">
						<label for="textHeader">Konunun başlığını giriniz</label>
					</div>
					<div class="input-field col s12  ">
						<i class="fab fa-github prefix"></i>
						<input id="gitHub" type="text" class="validate">
						<label for="gitHub">Github dökümanı için linki buraya yapıştır :)</label>

						<a class="helper-text right-align" href="">önizlemek için tıklayın</a>
					</div>
				</div>
			</div>
			<div class="col offset-s2 textButtonGrid">
				
				<button class="waves-effect waves-light btn-large">gönder</button>
				

			</div>
		</div>


	</div>
	<div class="input-field col s12">
		<textarea name="" id="editor1" cols="30" rows="10"></textarea>
	</div>
</div>
</form>
<script>
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


$("nav").css("background","#264452");
	</script>




	<?php 
	include 'loginCard.php';
	include 'footer.php';
	?>