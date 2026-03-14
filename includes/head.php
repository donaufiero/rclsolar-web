<!DOCTYPE html>
<html lang="en" class="wide wow-animation">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48340391-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-48340391-1');
</script>

  <!-- Site Title-->
  <title><?php if(isset($title)) {echo $title;}
	  			else {echo "Solar Specialists | RCL Solar | New Jerseys Premier Solar Installer! Since 1999";} ?></title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=0">
  <meta name = "robots" content="index,follow" />
	<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Home | RCL Solar | Go RCL Solar. Since 1999." />
<meta property="og:url" content="https://www.rclsolar.com/" />
<meta property="og:site_name" content="RCL Solar | New Jerseys Premier Solar Installer. Since 1999." />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Home | RCL Solar | Go RCL Solar. Since 1999.." />
<meta name="twitter:site" content="@RCLSolar" />
<meta name="twitter:creator" content="@RCLSolar" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,900,400italic&display=swap">
  <link rel="stylesheet" href="css/style_dec2023.css">
 <?php header('Cache-Control: max-age=31536000'); ?>
  <!--[if lt IE 10]><div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div><script src="js/html5shiv.min.js"></script><![endif]-->
<?php include('includes/common.php'); ?>
<?php include('includes/db.php'); ?>
<?php include('includes/functions.php'); ?>

<SCRIPT LANGUAGE="JavaScript">
 function addDashes(f){
	/*num = f.value;
    parts = [num.slice(0,3),num.slice(3,6),num.slice(6,10)];
    fNum = parts[0]+"-"+parts[1]+"-"+parts[2];
    f.value = fNum*/
    let number = f.value;
    if (number == ''){
      return;
    }
    else{
      number = number.replace(/\s/g, '');
      number = number.replace(/\-/g, '');
      number = number.substring(0,3) + '-' + number.substring(3,6) + '-' + number.substring(6);
      f.value = number;
    }
 }
</SCRIPT>
	
	
<SCRIPT LANGUAGE="JavaScript">
	function CheckReffer(val){
 		if(val=='Reference'||val=='Other')
   			document.getElementById("ifYes").style.display = "block";
 		else  
   			document.getElementById("ifYes").style.display = "none";
	}
</script>

<SCRIPT LANGUAGE="JavaScript">
  function displayNote(val){
    if(val=='existing')
        document.getElementById("ifYesNote").style.display = "block";
    else  
        document.getElementById("ifYesNote").style.display = "none";
  }
</script>

<script>
	function rclSelected(vals){
		document.getElementById("select-search-7").value ="Reference";
	}
</script>

	<script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
	
	<script src="https://www.google.com/recaptcha/api.js?render=6LfYhbAaAAAAAHaEXI2zQzf_cUFFHvWgvdC93N9d"></script>
	
</head>