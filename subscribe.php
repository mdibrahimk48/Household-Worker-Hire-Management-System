<?php
	if (isset($_POST['email'])) {
		if ($_POST['email'] != '') {
			$msg = 'ok';
		}
		else{
			$msg = "Enter Your Email.";
		}
		echo $msg; die;
	}
?>