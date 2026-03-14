<?php 
$title = "Contact | RCL Solar | New Jerseys Premier Solar Installer! Since 1999";
include ('includes/head.php'); ?>

<body>
  <!-- Page-->
  <div class="page">
    <!-- Page Header-->
   <?php include ('includes/header.php'); ?>
    <section class="section-full text-left">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Contact Us</h1>
            <p></p>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>             
              <li class="active">Contact Us</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!--Section Contact Us 2-->
    <section class="section-md text-left">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2>Get in Touch</h2>
            <hr>
            <p>You can contact us any way that is convenient for you. We are available 24/7 via fax, email, or facebook. You can also use a quick contact form below or visit our office personally. Please use this form for anything other than Solar Installation Inquries!</p>
            <i>By filling out and submitting the form above, I agree to receive emails and calls from RCL Solar my inquiry.</i>
            <!-- RD Mailform-->
		<?php include('includes/contactForm.php'); ?>
          </div>
          <div class="col-md-4 offset-7">
            <div class="row row-mod-1 flow-offset-6 sidebar text-sm-center text-md-left">
              <div class="col-xs-12 col-sm-4 col-md-12">
                <dl class="contact-info">
                  <dt>
                    <span class="h4 border-bottom">Phone</span>
                  </dt>
                  <dd>
					  <a href="callto:#" class="text-light"><?php echo $hqPhone; ?></a>
                      <br>
                    </a>
                    <a href="callto:#" class="text-light"><? echo $hqPhone2; ?></a>
                  </dd>
                </dl>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-12">
                <dl class="contact-info">
                  <dt>
                    <span class="h4 border-bottom">E-mail</span>
                  </dt>
                  <dd>
                    <a href="mailto:#" class="text-sushi"><?php echo $hqEmail; ?></a>
                  </dd>
                </dl>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-12">
                <h4 class="border-bottom">Follow Us</h4>
                <div class="icon-group">
                  <a href="<?php echo $facebook; ?>" target="_blank" class="icon icon-sm icon-social fa-facebook"></a>
                  <a href="<?php echo $twitter; ?>" target="_blank" class="icon icon-sm icon-social fa-twitter"></a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <address class="address">
                  <span class="h4 border-bottom">Address</span>
                  <p><?php echo $hqAddress; ?></p>
                </address>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <h4 class="border-bottom">Open Hours</h4>
                <p>8:00 - 4:00 Mon - Fri</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section Google map-->
    <section class="text-left">
      <!-- RD Google Map-->
      <div class="rd-google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.0750887766394!2d-75.36066848436977!3d39.5579144153434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c718138698eb5b%3A0x4bb7573a523bde78!2s29%20Alloway%20Friesburg%20Rd%2C%20Alloway%2C%20NJ%2008001!5e0!3m2!1sen!2sus!4v1616517383361!5m2!1sen!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180">
              <p><?php echo $hqAddress; ?></p>
            </li>
          </ul>
        </div>
      </div>
    </section>
	<?php include('includes/smallFooter.php'); ?>
  </div>

</body>
</html?
   