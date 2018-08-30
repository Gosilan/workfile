<?php 
	
	$error_occured = 0;
	$error_name = "";
	$error_email = "";
	$error_contact = "";
	$error_comments = "";
	
	if(isset($_POST["tx_name"])) {
		
			if(($tx_name == "") || (!preg_match("/^[a-zA-Z ]*$/",$tx_name))) {
					$error_occured = 1;
					$error_name = "Please enter a valid name";
				}
			
			if(($tx_email == "") || (!filter_var($tx_email, FILTER_VALIDATE_EMAIL))) {
					$error_occured = 1;
					$error_email = "Please enter a valid email";
				}
				
			if(($tx_contact == "") || !(is_numeric($tx_contact))) {
					$error_occured = 1;
					$error_contact = "Please enter a valid contact number";
				}
				
			if($tx_comments == "") {
					$error_occured = 1;
					$error_comments = "Please enter your message";
				}
		
		}
		
	if(isset($_POST["tx_name"]) && $error_occured == 0) {
		/*
			$from = $_POST["tx_email"];
			$email = "gosilan@gmail.com";
			$subject = "PHP Form Test";
			$message = "This is a test message.";
			
			mail($email, $subject, $message, "From:".$from);
			echo "<script type='text/javascript'>alert('Your message has been sent.');</script>"; */
		}
		
?>