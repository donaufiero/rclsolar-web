<?php 

//$title = "$sPageTitle";
include ('includes/head.php');

$specialistIS = $_GET['specialist'];
$test = urlCheck($specialistIS,'sales');
if($test =='no'){
	echo "<script type='text/javascript'>window.top.location='404.php';</script>"; exit;
}
$Specialist = getSpecialist('full');
//print_r($Specialist);
foreach($Specialist as $key => $value){
	if($value['page_id'] == $specialistIS){
		$sName = $value['name'];
		$sPicture = $value['picture'];
		$sEmail = $value['email'];
		$sAbout = $value['about'];
		$sPhone = $value['phone'];
		$sPageTitle = $value['page_title'];
		$sPage = $value['page'];
		$sEmail = $value['email'];
	}
}

?>

<body>
  <!-- Page-->
  <div class="page">
    <!-- Page Header-->
    <?php include ('includes/header.php'); ?>
    <section class="section-full text-left">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-8 col-lg-offset-4">
            <h1><?php echo $sName; ?></h1>
            <p></p>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="contact-us.php">Contacts</a>
              </li>
              <li class="active"><?php echo htmlspecialchars($sName); ?></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!--Section Description-->
    <section class="section-sm bg-dark text-left">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-offset-0 col-md-4 inset-8">
            <div class="img-wrap-mod-1">
              <img src="<?php echo $sPicture; ?>" alt="" width="320" height="320">
            </div>
            <h4 class="border-bottom offset-8">Contact <?php echo htmlspecialchars(ucfirst($specialistIS)); ?> </h4>
            <p class="offset-10">Fill out the form below and <?php echo htmlspecialchars (ucfirst($specialistIS)); ?> will contact you</p>
            <i>By filling out and submitting the form below, I agree to receive emails and calls from RCL Solar regarding my solar inquiry.</i>
            <?php include ('includes/specialistForm.php'); ?>
          </div>
          <div class="col-xs-12 col-md-8 offset-5">
            <div class="row row-mod-1">
              <div class="col-xs-12 col-sm-4 col-md-3">
                <dl class="contact-info">
                  <dt>
                    <span class="h6 text-ubold">Phones</span>
                  </dt>
                  <dd>
                    <a href="tel:" class="text-light"><?php echo $sPhone; ?>
                      <br>
                    </a>                    
                  </dd>
				  <dd>
                    <a href="tel:" class="text-light"><?php echo $hqPhone; ?>
                      <br>
                    </a>                    
                  </dd>
                </dl>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <dl class="contact-info">
                  <dt>
                    <span class="h6 text-ubold">E-mail</span>
                  </dt>
                  <dd>
                    <a href="mailto:<?php echo $sEmail; ?>" class="text-sushi"><?php echo $sEmail; ?></a>
                  </dd>
                </dl>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <address class="address">
                  <span class="h6 text-ubold">Address</span>
                  <p><?php echo $hqAddress; ?></p>
                </address>
              </div>
            </div>
            <h4 class="offset-8 border-bottom">About <?php echo ucfirst($specialistIS); ?></h4>
            <p><?php echo $sAbout; ?></p>
          </div>
        </div>
      </div>
    </section>

	<?php include ('includes/smallFooter.php'); ?>  
  </div>

</body>

</html>
