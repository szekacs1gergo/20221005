<?php
	$user=mysqli_fetch_array(
		mysqli_query($dab,"
		SELECT * FROM users
		WHERE
		userid='$_SESSION[userid]'
		"));
		$loginok=mysqli_query($dab,"
		SELECT * FROM login
		WHERE
		luserid='$user[userid]'
		ORDER BY ludatum DESC
		LIMIT 0,5
		");
		$utolso5="";
		while($login=mysqli_fetch_array($loginok))
		{
			$utolso5.=$login['ludatum'] . "<br>";
			
		}
	print"
	<table>
	<tr><td>Felhasználó neve:$user[usn]			</td></tr>
	<tr><td>Felhasználó e-mail címe:$user[mail]	</td></tr>
	<tr><td>Felhasználó jelszava:$user[upd]		</td></tr>
	<tr><td>Regisztráció dátuma:$user[udatum]	</td></tr>
	<tr><td>Felhasználó státusza:$user[ustatus]	</td></tr>
	<tr><td>Utolsó belépés dátuma:$utolso5		</td></tr>
	</table>
	";
?>