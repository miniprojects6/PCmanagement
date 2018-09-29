<?php
	session_start();
	unset($_SESSION["pusername"]);
	unset($_SESSION["ppassword"]);
	header('Location: ../login.html')
?>
