<?php
if(isset($_POST['action'])) {
switch($_POST['action']) {
case 'Yes':
		header("Location:login.php");
		exit();
		break;
case 'No':
		header("Location:review.php");
		exit();
		break;
		
	}
	}