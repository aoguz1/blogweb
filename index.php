<?php 
include 'header.php';
 ?>
	<!--sidebar-->

	<div class="index-banner">
		
		<canvas id="indexCanvasBanner"></canvas>
		<div id="particles-js">

		</div>
	</div>
	<!--content-->
	<div class="placeholder"></div>
	<div class="indexContent">
		<div class="row">
			<!--card-->
			<div class="col s11  indexContentMainCard ">
				<div class="row">
					<?php for ($i=0; $i <6 ; $i++) { ?>
						<div class="col s4  mainCard">

							<div class="indexCardNew z-depth-4">
								<div class="indexCardBG">
									<div class="indexType">JS</div>
									<h5>ajax nedir?</h5>
									<p class="indexUsers"><i class="fas fa-user" style="margin-right: 10px;"></i>fatihemree</p>
									<p class="indexContent">
										Ajax, “Asynchronous JavaScript and XML” (Türkçe: Eşzamansız JavaScript ve XML) anlamına gelen ve bir çok programlama dili ile uyumlu çalışan bir tekniktir.
<!-- <div class="indexSave">
	<i class="fas fa-bookmark"></i>
</div> -->
</div>

</div>

</div>
<?php } ?> 	 


</div>

<div class="col s1 indexTrendCard">
	<!-- Grey navigation panel -->
</div>
</div>
</div>


</div>





<!--index login -->


<div id="modal1" class="login-block">

	<div id="loading" class="progress">
		<div class="indeterminate"></div>
	</div>
	<div id="close"><i class="material-icons">close</i></div>



	<div class="row loginUsers">
		<h1>Giriş</h1>
		<form id="loginform" class="col s12 form_login">
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input id="icon_prefix" type="text" data-error="" name="loginuser" class="validate">
					<label for="icon_prefix">Kullanıcı Adı</label>

				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">lock
					</i>
					<input id="icon-password" type="password"name="loginpassword" class="validate">
					<label for="icon-password">Parola</label>
					<a class="helper-text right-align" href=""> Parolanızı mı unuttunuz?</a>
				</div>
				<div class="input-field col s12 loginButtonD">  
					<button id="loginButton" class="btn waves-effect waves-light" type="button">Giriş</button>
				</div>

			</div>
		</form>
		<p class="form-brackets"><span>YA DA</span></p>

		<div class="col s12 form_other-login">
			<a class="form_login-google" href=""><i class="fab fa-google"></i></a>
			<a class="form_login-github isDisabled" href="" ><i class="fab fa-github"></i></a>

		</div>

		<p class="form-brackets"><span>kayıt olmadınız mı ? </span></p>
		<div class="col s12 form_other-signin">

			<a class="waves-effect waves-teal btn-flat login_signButton">Kayıt Ol</a>
		</div>


	</div>

	<div class="row signUsers">
		<!--	 <a class="waves-effect waves-teal btn-flat">Giriş Yap</a>  -->
		<h1>Kayıt Ol</h1>
		<form method="post" class="col s12 form_login  kayit" id="kayit">
			<div class="row">
				<div class="input-field inline col s12">
					<i class="material-icons prefix">account_circle</i>
					<input id="signUserName" type="text" class="validate" data-error=".errUsername"  name="username" >
					<label for="signUserName">Kullanıcı Adı</label>
					<div class="errUsername"></div>
				</div>
				<div class="input-field col inline s12">
					<i class="material-icons prefix">email</i>
					<input id="siginEposta" type="email" class="validate" data-error=".errEmail" name="email" >
					<label for="siginEposta">E-posta</label>
					<div class="errEmail"></div>
				</div>
				<div class="input-field inline col s12">
					<i class="material-icons prefix">lock
					</i>
					<input id="siginPassword" type="password" class="validate" data-error=".errPassword" name="password" >
					<label for="siginPassword">Parola</label>
					<div class="errPassword"></div>
				</div>
				<div  class="input-field inline col s12">
					<i class="material-icons prefix">lock
					</i>

					<input id="siginPasswordTick" type="password" class="validate" data-error=".errCpassword" name="cpassword" >
					<label for="siginPasswordTick">Parolayı Onayla</label>
					<div class="errCpassword"></div>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">date_range
					</i>
					<input id="siginDate"  type="text" class="datepicker" name="date" >
					<label for="siginDate">Doğum Tarihiniz</label>
				</div>
				<div class="input-field col s12 signButtonD">
					<a class="form_login-google" href=""><i class="fab fa-google"></i></a>
					<button class="btn waves-effect waves-light " type="submit" name="loginButton">Kayıt Ol</button>
					<a class="form_login-github isDisabled" href="" ><i class="fab fa-github"></i></a>

				</div>
			</form>

		</div>

		<p class="users-loginButton"><span >Giriş Yap</span></p>
		<!--zaten bir hesabınız var mı? -->

	</div>

</div>

<script>
	
	/*
*
* GRADİENT BANNER
*
*/



var granimInstance = new Granim({
  element: '#indexCanvasBanner',
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

</script>

<!--index login -->
<?php 
include 'footer.php';
 ?>