<?php 

$title = ucfirst($_GET['member'])." | RCL Solar | New Jerseys Premier Solar Installer! Since 1999";
include ('includes/head.php');



$member = $_GET['member'];
//echo $member;
$test = urlCheck($member,'team');
if($test =='no'){
	//echo "<script type='text/javascript'>window.top.location='404.php';</script>"; exit;
}
//echo $test;
$Member = getTeam('member',$member);
//print_r($Specialist);
	foreach($Member as $key => $value){
		$mFName = $value['fname'];
		$mLName = $value['lname'];
		$mPicture = $value['picture'];
		$mEmail = $value['email'];
		$mAbout = $value['about'];
		$mPhone = $value['phone'];
		//$mPageTitle = $value['page_title'];
		$mPage = $value['page'];
		$sAbout = $value['about'];
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
            <h1><?php echo $mFName.' '.$mLName ; ?></h1>
            <p></p>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="about.php">About</a>
              </li>
			  <li>
                <a href="ourTeam.php">Team</a>
              </li>
              <li class="active"><?php echo htmlspecialchars($mFName).' '.htmlspecialchars($mLName); ?></li>
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
              <img src="<?php echo $mPicture; ?>" alt="" width="320" height="320">
            </div>
            
          </div>
          <div class="col-xs-12 col-md-8 offset-5">
            <div class="row row-mod-1">
              <div class="col-xs-12 col-sm-4 col-md-3">
                <dl class="contact-info">
                  <dt>
                    <span class="h6 text-ubold">Phones</span>
                  </dt>
                  <dd>
                    <a href="tel:" class="text-light"><?php echo $mPhone; ?>
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
                    <a href="mailto:#" class="text-sushi"><?php echo $mEmail; ?></a>
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
            <h4 class="offset-8 border-bottom">About <?php echo ucfirst($member); ?></h4>
            <p><?php echo $mAbout; ?></p>
          </div>
        </div>
      </div>
    </section>

	<?php include ('includes/smallFooter.php'); ?>  
  </div>

</body>

</html>