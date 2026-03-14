<?php

$nameErr = $emailErr= $phoneErr = $addErr= $cityErr= $zipErr= $refErr = $noteErr = "";
$name = $email= $phone= $address= $city= $referral = $zip = $ref = $referral = $contactnote = "";	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST['name'])){
			$nameErr = "Name is Required";	
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
		if(empty($_POST['address'])){
			$addErr = "Address is Required";
		} else {
			$address = test_input($_POST['address']);
			// check if name only contains letters and whitespace
		}
	if(empty($_POST['city'])){
			$cityErr = "City is Required";	
		} else {
			$city = test_input($_POST['city']);
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$city)) {
      			$cityErr = "Only letters and white space allowed";
    		}
		}
		if(empty($_POST['zip'])){
			$zipErr = "Zip Code is Required";	
		} else {
			$zip = test_input($_POST['zip']);			
		}
		if(empty($_POST['ref'])){
			$refErr = "Referral Drop Down is Required";	
		} else {
			$ref = test_input($_POST['ref']);
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$ref)) {
      			$refErr = "Only letters and white space allowed";
    		}
		}

		if(empty($_POST['contactnote'])){
				$noteErr = "Contact Note is Required";	
			} else {
				$contactnote = test_input($_POST['contactnote']);
				
			}
	
	$referral = test_input($_POST['referral']);

	if($ref == "Reference"){
		$crm_ref = $referral;
	}else{
		$crm_ref = $ref;
	}

	$crm_insert = true;

	if($_POST['cust_status'] == "new"){
		$crm_insert = true;
	}
	else{
		$crm_insert = false;
	}
	
	if(empty($nameErr) && empty($emailErr) && empty($addErr) && empty($cityErr) && empty($noteErr)){
		$parts = explode(" ",$name);
		$lastName = array_pop($parts);
		$firstName = implode(" ",$parts);
		if($crm_insert){
			$comeBack = insertLead($firstName, $lastName, $email, $phone, $address, $city, 'NJ', $zip, $specialist = htmlspecialchars(ucfirst($specialistIS)), $ref, $referral, $title=  htmlspecialchars (ucfirst($specialistIS)) , $_SERVER['REMOTE_ADDR']);
			$comeBack2 = insertCRMLead($firstName, $lastName, $email, $phone, $address, $city, 'NJ', $zip, $specialist = htmlspecialchars(ucfirst($sName)), $crm_ref, $_SERVER['REMOTE_ADDR']);
			//echo $comeBack;
			if($comeBack == 'sucess'){
				$message = $firstName." ".$lastName." has requested ".htmlspecialchars($sName)." contact them about Solar. \r\n";
				$message .= $address.", ".$city.",  ".$state.", ".$zip."\r\n";
				$message .= $email."       Phone - ".$phone."\r\n";
				$message .= $firstName." heard about RCL from ".$ref." ".$referral;
				//$message = wordwrap($message, 70, "\r\n");
				$email_to = 'nicole@rclsolar.com , marlyn@rclsolar.com,'.$sEmail;
				//$email_to = 'don@whiteoakwebdesign.com';
				//echo $email_to;
				emailForms('New Customer Contact us submission', $email_to, $message);
				echo "<script type='text/javascript'>window.top.location='specialistFormResponse.php?specialist=$specialistIS'</script>"; exit;
			} else{
				echo "<script type='text/javascript'>window.top.location='formError.php';</script>"; exit;
			}
		}
		else{
			$message = "Existing Customer " . $firstName." ".$lastName." has requested ".htmlspecialchars($sName)." contact them about Solar. \r\n";
			$message .= $address.", ".$city.",  ".$state.", ".$zip."\r\n";
			$message .= $email."       Phone - ".$phone."\r\n";
			$message .= $firstName." heard about RCL from ".$ref." ".$referral;
			$message .= "\r\n" . "Their message is: " . $contactnote;
			//$message = wordwrap($message, 70, "\r\n");
			$email_to = 'nicole@rclsolar.com , marlyn@rclsolar.com,'.$sEmail;
			//$email_to = 'don@whiteoakwebdesign.com';
			//echo $email_to;
			emailForms('Existing Customer Contact us submission', $email_to, $message);
			echo "<script type='text/javascript'>window.top.location='specialistFormResponse.php?specialist=$specialistIS'</script>"; exit;
		}			
	}
}


?>



<!-- RD Mailform-->
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action= "<?php echo htmlspecialchars($sPage);?>" class="rd-mailform text-left offset-10">
              <div class="form-group">
                <label for="name" class="form-label">Enter your name</label>
                <input id="name" type="text" name="name" data-constraints="@Required" class="form-control">
				  <span class="error" style='color:red;'><?php echo $nameErr;?></span>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Enter your e-mail</label>
                <input id="email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
				<span class="error" style='color:red;'><?php echo $emailErr;?></span>
              </div>
			  <div>
			  	<label for="phone" class="form-label">Enter your prefered phone#</label>
                <input id="phone" type="phone" name="phone" data-constraints="@Required @Phone" class="form-control">
				<span class="error" style='color:red;'><?php echo $phoneErr;?></span>
			  </div>
			  <div>
			  	<label for="address" class="form-label">Enter your address</label>
                <input id="address" type="text" name="address" data-constraints="@Required " class="form-control">
				<span class="error" style='color:red;'><?php echo $addErr;?></span>
			  </div>
              <div>
			  	<label for="city" class="form-label">Enter your city</label>
                <input id="city" type="text" name="city" data-constraints="@Required" class="form-control">
				<span class="error" style='color:red;'><?php echo $cityErr;?></span>
			  </div>
			  <div>
			  	<label for="zip" class="form-label">Enter your postal code</label>
                <input id="zip" type="text" name="zip" data-constraints="@Required" class="form-control">
				<span class="error" style='color:red;'><?php echo $zipErr;?></span>
			  </div>			  
			  <div class="form-group">
              		<label for="select-search-7" class="form-label">Referral * </label>
              		<select name="ref" id="select-search-7" data-minimum-results-for-search="Infinity" class="form-control select-filter" onChange="CheckReffer(this.value);" required>
                		<option value="How" selected="selected">How Did You Hear About RCL</option>
                		<option value="Reference">Reference</option>
						<option value="Signs">Signs</option>
                		<option value="Facebook">Facebook</option>
                		<option value="Google">Google</option>
                		<option value="Instagram">Instagram</option>
                		<option value="Twitter">Twitter</option>
						<option value="SnapChat">SnapChat</option>
                		<option value="Commercial">Commercial</option>						
						<option value="Other">Other</option>
              		</select>					
            	</div>
				<div id="ifYes" style="display:none;">
					<div class="form-group">
              			<label for="referral" class="form-label">Reference/Other </label>
              			<input id="referral" type="text" name="referral" placeholder="Reference/Other" class="form-control">
            		</div> 
				</div>
				<div class="form-group">
              		<label for="cust_status" class="form-label">New or Existing Customer? </label>
              		<select name="cust_status" id="cust_status" data-minimum-results-for-search="Infinity" onChange="displayNote(this.value);" required>
                		<option value="new">New Customer</option>
                		<option value="existing">Existing Customer</option>
              		</select>					
            	</div>
            	<div id="ifYesNote" style="display:none;">
					<div class="form-group">						
              			<label for="contactnote" class="form-label">What can we help with?</label>
              			<input id="contactnote" type="text" name="contactnote" placeholder="Contact Reason" data-constraints="@Required" class="form-control">
										<span class="error" style='color:red;'><?php echo $noteErr; ?></span>
            		</div> 
				</div>																			 
																									 
              <button type="submit" class="btn btn-sushi btn-sm">Go Solar</button>
            </form>