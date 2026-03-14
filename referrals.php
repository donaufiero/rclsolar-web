<?php 

//$title = "$sPageTitle";
include ('includes/head.php');

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
            <h1>Referral Bonus</h1>
            <p></p>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="contact-us.php">Contacts</a>
              </li>
              <li class="active">referrals</li>
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
            
            <h4 class="border-bottom offset-8">Referral Form </h4>
            <p class="offset-10">Fill out the form below and a RCL Solar Specialist will contact your referral?</p>
            <?php include ('includes/referralForm.php'); ?>
          </div>
          <div class="col-xs-12 col-md-8 offset-5">
            
            <h4 class="offset-8 border-bottom">About the RCL Solar Referral program.</h4>
            <p><?php echo $referral_description ?></p>
          </div>
        </div>
      </div>
    </section>

	<?php include ('includes/smallFooter.php'); ?>  
  </div>

</body>

</html>