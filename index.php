<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<?php 
$title = "Home | RCL Solar | New Jerseys Premier Solar Installer! Since 1999.";
include ('includes/head.php'); ?>
<body>

  <!-- Page-->
  <div class="page">
  <img src="images/rcl_25_crop.png" alt="" style="position: absolute; right: 5%; top: 0.25%; max-width: 150px;">
    <?php include ('includes/header.php'); ?>
    <?php include ('includes/swiper.php'); ?>
    <?php include ('includes/homePageForm.php'); ?>
    <?php //include ('includes/popularCategories.php'); ?>
      <?php // include('includes/2Column.php'); ?>
      <?php include ('includes/specialistsHome.php'); ?>
     <?php include ('includes/ourAdvantages.php'); ?>
    <?php include ('includes/recentHome.php'); ?>
     <?php include ('includes/testimonialsHome.php'); ?>
    
    
   
    <?php include ('includes/footer.php'); ?>    
</body>

</html>