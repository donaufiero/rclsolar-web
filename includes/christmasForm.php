<?php

//$prizes = getPrizes(2021);
$prizes = array('Choose','Dewalt 20V','Penn Rod & Reel','Cooler of Cheer','$150 Ruth Chris', '$100 Amazon', '$100 Cabelas', 'Hand & Stone Massage', '$100 Acme', '$75 Top Golf','$100 Wawa');
//print_r($prizes);
$nameErr = $lnameErr = $emailErr= $phoneErr = $addErr= $cityErr= $zipErr= $yname = $yemail = $yphone ="";
$name = $email= $phone= $address= $city= $referral = $zip = $ref = $referral ="";	

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
	if(empty($_POST['lname'])){
			$nameErr = "Last Name is Required";	
		} else {
			$lname = $_POST['lname'];
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
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
		if(empty($_POST['zip'])){
			$zipErr = "Zip Code is Required";	
		} else {
			$zip = test_input($_POST['zip']);			
		}
		if(empty($_POST['yname'])){
			$ynameErr = "Your Name is Required";	
		} else {
			$yname = $_POST['yname'];
			// check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z-' ]*$/",$yname)) {
      			$ynameErr = "Only letters and white space allowed";
    		}
		}	
	if (empty($_POST["yemail"])) {
    		$yemailErr = "Email is required";
  		} else {
    		$yemail = test_input($_POST["yemail"]);
    		// check if e-mail address is well-formed
    		if (!filter_var($yemail, FILTER_VALIDATE_EMAIL)) {
      			$yemailErr = "Invalid email format";
    		}
  		}
		if(empty($_POST['yphone'])){
			$yphoneErr = "Last Name is Required";
		} else {
			$yphone = $_POST['yphone'];
			// check if name only contains letters and whitespace
    		if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['yphone'])) {
      			$yphoneErr = "Incorrect format";
    		}
		}
	if(empty($_POST['prize'])){
			$prizeErr = "Prize is required";
		} else {
			$prize1 = $_POST['prize'];
		}
	
	
	
	if(empty($nameErr) ){
		//$parts = explode(" ",$name);
		//$lastName = array_pop($parts);
		//$firstName = implode(" ",$parts);
			$comeBack = insertReferral($name, $lname, $email, $phone, $address, $city, 'NJ', $zip, $yname, $yphone, $yemail, $_SERVER['REMOTE_ADDR'], $_POST['prize']);
			$comeBack2 = insertCRMLead($name, $lname, $email, $phone, $address, $city, 'NJ', $zip, $specialist = 0, $yname, $_SERVER['REMOTE_ADDR']);
			//echo $comeBack;
			if($comeBack == 'sucess'){
				$message = $yname." has referred ".$name." ".$lname." to have RCL contact them about Solar. The request is from the RCL Web Site on the referral page. \r\n";
				$message .= $address.", ".$city.",  ".$state.", ".$zip."\r\n";
				$message .= $email."       Phone - ".$phone."\r\n";
				$message .= $name." referred by ".$yname."\r\n";
				$message .= $prize1." is the prize selected";
				//$message = wordwrap($message, 70, "\r\n");
				//$email_to = 'cbell@rclsolar.com,'.$sEmail;
				$email_to = 'cbell@rclsolar.com, nicole@rclsolar.com , kelly@rclsolar.com'.$sEmail;
				//$email_to = 'cbell@rclsolar.com, nicole@rclsolar.com ,';
				//echo $email_to;
				emailForms('Referral submission', $email_to, $message);
				echo "<script type='text/javascript'>window.top.location='referralFormResponse.php'</script>"; exit;
			} else{
				echo "<script type='text/javascript'>window.top.location='formError.php';</script>"; exit;
			}				
		} else
			$pageerror = "Your Referral did not send Please try again";
}


?>



<!-- RD Mailform-->
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="rd-mailform text-left offset-10">
				<h1 style="color:red; font-size: 20px"><?php echo $pageerror; ?></h1>
              <div class="form-group">
                <label for="name" class="form-label">Referral First name</label>
                <input id="name" type="text" name="name" data-constraints="@Required" class="form-control">
				  <span class="error"><?php echo $nameErr;?></span>
              </div>
				<div class="form-group">
                <label for="lname" class="form-label">Referral Last name</label>
                <input id="lname" type="text" name="lname" data-constraints="@Required" class="form-control">
				  <span class="error"><?php echo $lnameErr;?></span>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Referral e-mail</label>
                <input id="email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
				<span class="error"><?php echo $emailErr;?></span>
              </div>
			  <div>
			  	<label for="phone" class="form-label">Referral phone#</label>
                <input id="phone" type="phone" name="phone" data-constraints="@Required @Phone" class="form-control">
				<span class="error"><?php echo $phoneErr;?></span>
			  </div>
			  <div>
			  	<label for="address" class="form-label">Referral address</label>
                <input id="address" type="text" name="address" data-constraints="@Required " class="form-control">
				<span class="error"><?php echo $addErr;?></span>
			  </div>
              <div>
			  	<label for="city" class="form-label">Referral city</label>
                <input id="city" type="text" name="city" data-constraints="@Required" class="form-control">
				<span class="error"><?php echo $cityErr;?></span>
			  </div>
			  <div>
			  	<label for="zip" class="form-label">Referral postal code</label>
                <input id="zip" type="text" name="zip" data-constraints="@Required" class="form-control">
				<span class="error"><?php echo $zipErr;?></span>
			  </div>
				<h5 class="border-bottom offset-8">Your Information  </h5>
			  <div class="form-group">
                <label for="yname" class="form-label">Your name</label>
                <input id="yname" type="text" name="yname" data-constraints="@Required" class="form-control">
				  <span class="error"><?php echo $ynameErr;?></span>
              </div>
				
              <div class="form-group">
                <label for="yemail" class="form-label">Your e-mail</label>
                <input id="yemail" type="yemail" name="yemail" data-constraints="@Email" class="form-control">
				<span class="error"><?php echo $yemailErr;?></span>
              </div>
			  <div>
			  	<label for="yphone" class="form-label">Your phone#</label>
                <input id="yphone" type="yphone" name="yphone" data-constraints="@Phone" class="form-control">
				<span class="error"><?php echo $yphoneErr;?></span>
			  </div>																						 
			  <div class="form-group">
              		<label for="select-search-7" class="form-label">Prize Bag </label>
              		<select name="prize" id="select-search-8" data-minimum-results-for-search="Infinity" class="form-control select-filter" required">
					<?php foreach ($prizes as $key => $value) { ?>
							<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
					<?php } ?>
					</select>
					<span class="error"><?php echo $prizeErr;?></span>
            	</div>																					 
              <button type="submit" class="btn btn-sushi btn-sm">Refer</button>
            </form>