<?php
// define variables and set to empty values
$fnameErr = $lnameErr= $emailErr= $phoneErr = $addErr= $cityErr= $zipErr= $stateErr= $refErr = $referralErr = "";
$firstName = $lastName= $email= $phone= $address= $city= $state= $zip= $ref= $referral = "";	
	//print_r($_POST[]);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST['formId'] == "home"){
		if(empty($_POST['fname'])){
			$fnameErr = "First Name is Req";	
		} else {
			$firstName = $_POST['fname'];
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
      			$fnameErr = "Only letters and white space allowed";
    		}
		}
		if(empty($_POST['lname'])){
			$lnameErr = "Last Name is Required";
		} else {
			$lastName = $_POST['lname'];
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
      			$lnameErr = "Only letters and white space allowed";
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
		if(empty($_POST['state'])){
			$stateErr = "State is Required";	
		} else {
			$state = test_input($_POST['state']);
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$state)) {
      			$stateErr = "Only letters and white space allowed";
    		}
		}
		if(empty($_POST['zip'])){
			$zipErr = "Zip Code is Required";	
		} else {
			$zip = test_input($_POST['zip']);
			
		}
		//echo $_POST['ref'];
		if($_POST['ref'] == "How"){
			$refErr = "Referral Drop Down is Required";	
		} else {
			$ref = test_input($_POST['ref']);			
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$ref)) {
      			$refErr = "Only letters and white space allowed";
    		}
		}
			//echo $_POST['referral'];
		if($ref == "Reference"){
			if(!empty($_POST['referral'])){
				$referral = test_input($_POST['referral']);
				if (!preg_match("/^[a-zA-Z-' ]*$/",$referral)) {
      				$refErr = "Only letters and white space allowed";
				}
			} else {
				$referralErr = "Referral is required";
				echo "<script type='text/javascript'>CheckReffer('Reference');</script>";
			}
		
		}
		/*if(empty($_POST['referral']) && $_POST['ref'] == "Refererence")
			$referralErr = "Referral is required";
		elseif (!empty($_POST['referral'])){			
			$referral = test_input($_POST['referral']);
		}*/
		/*if(!empty($_POST['referral']))
			$referral = test_input($_POST['referral']); */
		
		if(empty($fnameErr) && empty($lnameErr)&& empty($emailErr) && empty($phoneErr) && empty($addErr) && empty($cityErr) && empty($zipErr) && empty($stateErr) && empty($refErr) && empty($referralErr)){
			$comeBack = insertLead($firstName, $lastName, $email, $phone, $address, $city, $state, $zip, $specialist = 'RCL', $ref, $referral, $title='home', $_SERVER['REMOTE_ADDR']);
			//echo $comeBack;
			if($comeBack == 'sucess'){
				$message = $firstName." ".$lastName." has requested to be contacted by a Solar Specialist. From the ".$title." page form. \r\n";
				$message .= $address.", ".$city.",  ".$state.", ".$zip."\r\n";
				$message .= $email."       Phone - ".$phone."\r\n";
				$message .= $firstName." heard about RCL from ".$ref." ".$referral;
				//$message = wordwrap($message, 70, "\r\n");
				$email_to = 'cbell@rclsolar.com, nicole@rclsolar.com';
				emailForms('Solar Inquiry', $email_to , $message);
				echo "<script type='text/javascript'>window.top.location='formResponse.php';</script>"; exit;
			} else{
				echo "<script type='text/javascript'>window.top.location='formError.php';</script>"; exit;
			}				
		}
		}
		
	}

?>

<section class="section-sm section-bottom-0 bg-dark">
      <div class="container position-margin-top undefined">
        <div class="search-form-wrap bg-white container-shadow">
          <h3>Have a RCL Solar Specialist Contact Me!</h3>
			<!-- <h4>Get my $1000 Cash Back</h4> -->
			<p><span class="error">* required field</span></p>
			<?php //print_r($_POST) //debugging ; ?>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="search-form" class="form-variant-1" id="homeForm">
			  <?php //echo $ref; ?>
			<div>
				<input type="hidden" id="formId" name="formId" value="home">
			</div>
			  
			<div class="row">
            	<div class="form-group">
              		<label for="First Name" class="form-label">First Name * </label>
              		<input id="fname" value="<?php echo $firstName; ?>" type="text" name="fname" placeholder="First Name" data-constraints="@Required" class="form-control">
					<span class="error"><?php echo $fnameErr;?></span>
            	</div>
            	<div class="form-group">
              		<label for="Last Name" class="form-label">Last Name * </label>
              		<input id="lname" value="<?php echo $lastName; ?>" type="text" name="lname" placeholder="Last Name" data-constraints="@Required" class="form-control">
					<span class="error"><?php echo $lnameErr;?></span>
            	</div> 
				<div class="form-group">
              		<label for="Email" class="form-label">E-mail * </label>
              		<input id="email" value="<?php echo $email; ?>" type="text" name="email" placeholder="email address" data-constraints="@Required @Email" class="form-control">
					<span class="error"><?php echo $emailErr;?></span>
            	</div> 
				<div class="form-group">
              		<label for="phone" class="form-label width-2">Phone*</label>
              		<input id="phone" onBlur='addDashes(this)' value="<?php echo $phone; ?>" type="tel" name="phone" placeholder="phone number" data-constraints="@Required @Numeric" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
					<span class="error"><?php echo $phoneErr;?></span>
            	</div>	
			</div>
			<div class="row">
            	<div class="form-group">
              		<label for="address" class="form-label">Address * </label>
              		<input id="address" value="<?php echo $address; ?>" type="text" name="address" placeholder="123 Your house" data-constraints="@Required" class="form-control">
					<span class="error"><?php echo $addErr;?></span>
            	</div>
            	<div class="form-group">
              		<label for="city" class="form-label">City * </label>
              		<input id="city" value="<?php echo $city; ?>" type="text" name="city" placeholder="City" data-constraints="@Required" class="form-control">
					<span class="error"><?php echo $cityErr;?></span>
            	</div>
				<div class="form-group">
              		<label for="select-search-7" class="form-label">State * </label>
              		<select name="state" id="select-search-8" data-minimum-results-for-search="Infinity" class="form-control select-filter" required">
					<?php foreach ($states11 as $key => $value) { ?>
							<option value="<?php echo $key; ?>" <?php if($key == 'NJ') {echo 'selected ="selected"';} ?>><?php echo $value; ?></option>
					<?php } ?>
					</select>
					<span class="error"><?php echo $stateErr;?></span>
            	</div>
				<div class="form-group">
              		<label for="zip" class="form-label">Zip Code * </label>
              		<input value="<?php echo $zip; ?>" id="zip" type="text" name="zip" placeholder="00000" data-constraints="@Required" class="form-control">
					<span class="error"><?php echo $zipErr;?></span>
            	</div> 
			</div>
			<div class="row">
				<p><bold>If you were referred to RCL by someone, please enter their name here. RCL pays $500 to the person that referred you. They will not be able to collect the $500 referral fee if you do not enter it.</bold> </p>
				<div class="form-group">
              		<label for="select-search-7" class="form-label">Referral * </label>
              		<select name="ref" id="select-search-7" data-minimum-results-for-search="Infinity" class="form-control select-filter" onChange="CheckReffer(this.value); required">
                		<option value="How">How Did You Hear About RCL</option>
                		<option value="Reference" <?php if (isset($ref) && $ref == "Reference") echo "selected"; ?>>Reference</option>
						<option value="Signs" <?php if (isset($ref) && $ref == "Signs") echo "selected"; ?>>Signs</option>
                		<option value="Facebook" <?php if (isset($ref) && $ref == "Facebook") echo "selected"; ?>>Facebook</option>
                		<option value="Google" <?php if (isset($ref) && $ref == "Google") echo "selected"; ?>>Google</option>
						<option value="Radio" <?php if (isset($ref) && $ref == "Radio") echo "selected"; ?>>Radio</option>
                		<option value="Instagram" <?php if (isset($ref) && $ref == "Instagram") echo "selected"; ?>>Instagram</option>
                		<option value="Twitter" <?php if (isset($ref) && $ref == "Twitter") echo "selected"; ?>>Twitter</option>
						<option value="SnapChat" <?php if (isset($ref) && $ref == "SnapChat") echo "selected"; ?>>SnapChat</option>
                		<option value="Commercial" <?php if (isset($ref) && $ref == "Commercial") echo "selected"; ?>>Commercial</option>						
						<option value="Other" <?php if (isset($ref) && $ref == "Other") echo "selected"; ?>>Other</option>
              		</select>					
            	</div>
				<div id="ifYes" style="display:none;">
					<div class="form-group">						
              			<label for="referral" class="form-label">Reference/Other </label>
              			<input id="referral" type="text" name="referral" placeholder="Reference/Other" data-constraints="@Required" class="form-control">
						<span class="error"><?php echo $referralErr; ?></span>
            		</div> 
				</div>
			</div>
            
            <button type="submit" form="homeForm" value="Submit" class="btn btn-sm btn-sushi btn-min-width-sm">Submit</button>

          </form>
        </div>
      </div>
    </section>