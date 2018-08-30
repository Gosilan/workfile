<?php 

	$tx_name = "";
	$tx_email = "";
	$tx_contact = "";
	$tx_comments = "";

?>

<?php 

	if (isset($_POST["tx_name"])) {
			
			$tx_name = $_POST["tx_name"];
			$tx_email = $_POST["tx_email"];
			$tx_contact = $_POST["tx_contact"];
			$tx_comments = $_POST["tx_comments"];
			
		}

?>