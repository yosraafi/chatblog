<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html>
<head>
	<title>Bienvenue chez ChatBlog!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>

	<?php  

	if(isset($_POST['register_button'])) {
		echo '
		<script>

		$(document).ready(function() {
			$("#first").hide();
			$("#second").show();
		});

		</script>

		';
	}


	?>

	<div class="wrapper">

		<div class="login_box">

			<div class="login_header">
				<h1>ChatBlog!</h1>
				Connectez-vous ou inscrivez-vous ci-dessous!
			</div>
			<br>
			<div id="first">

				<form action="register.php" method="POST">
					<input type="email" name="log_email" placeholder="Adresse e-mail" value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
					?>" required>
					<br>
					<input type="password" name="log_password" placeholder="Mot de passe">
					<br>
					<?php if(in_array("l'e-mail ou le mot de passe était incorrect<br>", $error_array)) echo  "l'e-mail ou le mot de passe était incorrect<br>"; ?>
					<input type="submit" name="login_button" value="Connexion">
					<br>
					<a href="#" id="signup" class="signup">Besoin et compte? Inscrivez-vous ici!</a>

				</form>

			</div>

			<div id="second">

				<form action="register.php" method="POST">
					<input type="text" name="reg_fname" placeholder="prénom" value="<?php 
					if(isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Votre prénom doit comprendre entre 2 et 25 caractères<br>", $error_array)) echo "Votre prénom doit comprendre entre 2 et 25 caractères<br>"; ?>
					
					


					<input type="text" name="reg_lname" placeholder="nom" value="<?php 
					if(isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Votre nom doit comprendre entre 2 et 25 caractères<br>", $error_array)) echo "Votre nom doit comprendre entre 2 et 25 caractères<br>"; ?>

					<input type="email" name="reg_email" placeholder="Email" value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
					?>" required>
					<br>

					<input type="email" name="reg_email2" placeholder="Confirmez votre e-mail" value="<?php 
					if(isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Email déjà utilisé<br>", $error_array)) echo "Email déjà utilisé<br>"; 
					else if(in_array("Format d'email invalide<br>", $error_array)) echo "Format d'email invalide<br>";
					else if(in_array("Les e-mails ne correspondent pas<br>", $error_array)) echo "Les e-mails ne correspondent pas<br>"; ?>


					<input type="password" name="reg_password" placeholder="Mot de passe" required>
					<br>
					<input type="password" name="reg_password2" placeholder="Confirmez le mot de passe" required>
					<br>
					<?php if(in_array("Vos mots de passe ne correspondent pas<br>", $error_array)) echo "Vos mots de passe ne correspondent pas<br>"; 
					else if(in_array("Votre mot de passe ne peut contenir que des caractères ou des chiffres anglais<br>", $error_array)) echo "Votre mot de passe ne peut contenir que des caractères ou des chiffres anglais<br>";
					else if(in_array("Votre mot de passe doit être compris entre 5 et 30 caractères<br>", $error_array)) echo "Votre mot de passe doit être compris entre 5 et 30 caractères<br>"; ?>


					<input type="submit" name="register_button" value="S'inscrire">
					<br>

					<?php if(in_array("<span style='color: #14C800;'>Vous êtes prêt! Allez-y et connectez-vous!</span><br>", $error_array)) echo "<span style='color: #14C800;'>Vous êtes prêt! Allez-y et connectez-vous!</span><br>"; ?>
					<a href="#" id="signin" class="signin">Vous avez déjà un compte? Se connecter ici!</a>
				</form>
			</div>

		</div>

	</div>


</body>
</html>