<?php
	$emailErr = "";
	$email ="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST['formId'] == "newsletter"){
			if (empty($_POST["email"])) {
    			$emailErr = "Email is required";
  			} else {
    			$email = test_input($_POST["email"]);
    			// check if e-mail address is well-formed
    			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      				$emailErr = "Invalid email format";
    			}
  			}	
			if(empty($emailErr)){
				$comeBack = insertNewsletter($email, $_SERVER['REMOTE_ADDR']);
				//echo $comeBack;
				if($comeBack == 'sucess'){
					$message = "There is a new email address subcribed to the RCL Newsletter! \r\n";
					$message .= $email."\r\n";				
					$email_to = 'cbell@rclsolar.com, nicole@rclsolar.com ,';
					//echo $email_to;
					emailForms('Newsletter Subscription', $email_to, $message);
					echo "<script type='text/javascript'>window.top.location='newsletterResponse.php'</script>"; exit;
				} else{
					echo "<script type='text/javascript'>window.top.location='formError.php';</script>"; exit;
				}
			}
		}
		
	}


?>


			<div class="col-xs-12 col-sm-6 col-lg-3">
              <h6 class="text-ubold">Newsletter</h6>
              <p class="text-gray">Enter your email address to receive all news, promotions, special offers and other information.</p>
              <!-- RD Mailform-->
              <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="rd-mailform text-left subscribe">
                <div class="form-group">
				  <input type="hidden" id="formId" name="formId" value="newsletter">
                  <label for="email-sub" class="form-label"></label>
                  <input id="email-sub" type="email" name="email" data-constraints="@Required @Email" placeholder="Enter e-mail" class="form-control">
                </div>
                <button class="btn btn-sushi btn-sm">subscribe</button>
              </form>
            </div>