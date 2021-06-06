<?php
include("includes/header.php");

if(isset($_POST['cancel'])) {
	header("Location: settings.php");
}

if(isset($_POST['close_account'])) {
	$close_query = mysqli_query($con, "UPDATE users SET user_closed='yes' WHERE username='$userLoggedIn'");
	session_destroy();
	header("Location: register.php");
}


?>

<div class="main_column column">

	<h4>Fermer le compte</h4>

	
    Êtes-vous sûr de vouloir fermer votre compte ?<br><br>
	
    La fermeture de votre compte masquera votre profil et toute votre activité aux autres utilisateurs.<br><br>
	Vous pouvez rouvrir votre compte à tout moment en vous connectant simplement.<br><br>

	<form action="close_account.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Oui! Ferme le!" class="danger settings_submit">
		<input type="submit" name="cancel" id="update_details" value="Certainement pas!" class="info settings_submit">
	</form>

</div>