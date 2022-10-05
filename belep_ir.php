<h1>Beléptetés</h1>
<?php
	print_r($_POST);
		include("kapcso.php");
		$users=mysqli_query($dab,"
		SELECT * FROM users
		WHERE
		mail='$_POST[mail]' 
		AND
		upd='$_POST[upd]' 
		");
		if(mysqli_num_rows($users)==0)
			die("<script>alert('Hibás felhasználónév vagy jelszó!')</script>");
		else
		{
				print "<br>Mindjárt belépsz...";
		}
		/*mysqli_query($dab,"
		INSERT INTO users (userid, usn, mail, upd, uip, udatum, ustatus)
		VALUES 			  (NULL, '$_POST[usn]', '$_POST[mail]', '$_POST[upd]', '$_SERVER[REMOTE_ADDR]', NOW(), 'A')
		");
	print"<script>alert('Sikeres regisztráció!')</script>";
	*/
	mysqli_close($dab);
?>