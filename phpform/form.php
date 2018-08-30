<?php include '_header.php' ?>
<?php include '_init.php' ?>
<?php include '_validate.php' ?>

    <div id="main-container">
    	<div id="form-container">
        
        	<div id="form-holder">
        	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            	
				<input type="text" name="tx_name" placeholder="Name" value="<?php echo $tx_name; ?>"> <span class="error-msg"><?php echo $error_name; ?></span>
                <br>
                
                <input type="text" name="tx_email" placeholder="Email" value="<?php echo $tx_email; ?>"> <span class="error-msg"><?php echo $error_email; ?></span>
                <br>
                
                <input type="text" name="tx_contact" placeholder="Contact Number" value="<?php echo $tx_contact; ?>"> <span class="error-msg"><?php echo $error_contact; ?></span>
                <br>
                
                <textarea name="tx_comments" placeholder="How can we help you?"><?php echo $tx_comments; ?></textarea> <span class="error-msg"><?php echo $error_comments; ?></span>
                <br>
                
                <input type="submit" name="submit" value="Send Message">
				
            </form>
            </div> <!-- End of form-holder
        </div> <!-- End of form-container -->
    </div> <!-- End of main-container -->
    
<?php include '_footer.php' ?>

