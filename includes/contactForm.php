 <?php        
$nameErr = $emailErr= $phoneErr = $messageErr= "";
$name = $email= $phone= $message= "";	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST['name'])){
			$nameErr = "First Name is Required";	
		} else {
			$name = $_POST['name'];
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      			$nameErr = "Only letters and white space allowed";
    		}
		}		
		if (empty($_POST["email"])) {
    		$emailErr = "Email is required";
  		} else {
    		$email = test_input($_POST["email"]);
    		// check if e-mail address is well-formed
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			$emailErr = "Invalid email format";
    		}
  		}
		if(empty($_POST['phone'])){
			$phoneErr = "Last Name is Required";
		} else {
			$phone = $_POST['phone'];
			// check if name only contains letters and whitespace
    		if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
      			$phoneErr = "Incorrect format";
    		}
		}		
		if(empty($_POST['message'])){
			$messageErr = "Message is Required";	
		} else {
			$message = test_input($_POST['message']);
			// check if name only contains letters and whitespace
    		if (!preg_match('/^[a-z0-9 .\-]+$/i',$message)) {
      			$messageErr = "Only letters, numbers and white space allowed";
    		}
		}
		if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
			$comeBack = insertContact($name, $email, $phone, $message, $_SERVER['REMOTE_ADDR']);
			echo $comeBack;
			if($comeBack == 'sucess'){
				$note = $name." has filled out the Contact Us Form from the website. \r\n";
				$note .= $email."       Phone - ".$phone."\r\n";
				$note .= $message;
				$message = wordwrap($message, 70, "\r\n");
				$email_to = 'cbell@rclsolar.com, nicole@rclsolar.com';
				//$email_to = 'cbell@rclsolar.com'; //For Testing
				emailForms('Contact us submission', $email_to , $note);
				
				echo "<script type='text/javascript'>window.top.location='contactResponse.php';</script>"; exit;
			} else{
				echo "<script type='text/javascript'>window.top.location='formError.php';</script>"; exit;
			}				
		}
}

?>  
	
			<form data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="rd-mailform text-left offset-11">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="contact-name" class="form-label">Your name</label>
                    <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
					  <span class="error"><?php echo $nameErr;?></span>
                  </div>
                </div>
                <div class="col-sm-6 input-mod-1">
                  <div class="form-group">
                    <label for="contact-phone" class="form-label">Your phone</label>
                    <input id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric" class="form-control">
					  <span class="error"><?php echo $phoneErr;?></span>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="contact-email" class="form-label">Your e-mail</label>
                    <input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
					  <span class="error"><?php echo $emailErr;?></span>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="contact-message" class="form-label">Message</label>
                    <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
					  <span class="error"><?php echo $messageErr;?></span>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-sushi btn-sm">Send message</button>
            </form>