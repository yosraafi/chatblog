<?php 
include("includes/header.php");
include("includes/form_handlers/settings_handler.php");
?>

<div class="main_column column">

	<h4>Paramètres du compte</h4>
	<?php
	echo "<img src='" . $user['profile_pic'] ."' class='small_profile_pic'>";
	?>
	<br>
	<a href="upload.php">
		Télécharger une nouvelle photo de profil</a> <br><br><br>

			
		Modifiez les valeurs et cliquez sur "Mettre à jour les détails"

	<?php
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	?>

	<form action="settings.php" method="POST">
		Prénom: <input type="text" name="first_name" value="<?php echo $first_name; ?>" id="settings_input"><br>
		Nom de famille:<input type="text" name="last_name" value="<?php echo $last_name; ?>" id="settings_input"><br>
		Email: <input type="text" name="email" value="<?php echo $email; ?>" id="settings_input"><br>

		<?php echo $message; ?>

		<input type="submit" name="update_details" id="save_details" value="Mettre à jour les détails" class="info settings_submit"><br>
	</form>

	<h4>Changer le mot de passe</h4>
	<form action="settings.php" method="POST">
		
		Ancien mot de passe: <input type="password" name="old_password" id="settings_input"><br>
		Nouveau mot de passe: <input type="password" name="new_password_1" id="settings_input"><br>
		Retapez le nouveau mot de passe: <input type="password" name="new_password_2" id="settings_input"><br>

		<?php echo $password_message; ?>

		<input type="submit" name="update_password" id="save_details" value="Mettre à jour le mot de passe" class="info settings_submit"><br>
	</form>

	<h4>Fermer le compte</h4>
	<form action="settings.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Fermer le compte" class="danger settings_submit">
	</form>


</div>