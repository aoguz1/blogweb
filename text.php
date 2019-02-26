<?php include 'header.php'; ?>

<form action="">
<textarea name="" id="editor1" cols="30" rows="10"></textarea>
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

</script>


<?php 
include 'loginCard.php';
include 'footer.php';
 ?>