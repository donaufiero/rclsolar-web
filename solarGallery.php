<?php
	$title = 'Solar Gallery | RCL Solar | New Jerseys Premier Solar Installer! Since 1999';
	include('includes/head.php');
?>

<body>
  <!-- Page-->
  <div class="page">
   <?php include('includes/header.php'); ?>
    <section class="section-full text-center text-lg-left">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>RCL Solar Gallery</h1>
            <p></p>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="#">Solar</a>
              </li>
              <li class="active">Solar Gallery</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
<?php
	$numFiles = countPictures() ;
	$pictures = getPictures();
	shuffle($pictures);
?>
    <!--Section Isotop-->
    <section class="section-md section-bottom-0 text-center text-lg-left">
      <!--<div class="container">
        <div class="btn-group-isotope isotope-filters isotope-filters-horizontal">
          <button data-isotope-filter="*" data-isotope-group="gallery" class="btn active">All Photos</button>
          <button data-isotope-filter="type-1" data-isotope-group="gallery" class="btn">Luxury Houses</button>
          <button data-isotope-filter="type-2" data-isotope-group="gallery" class="btn">Cozy Houses</button>
          <button data-isotope-filter="type-3" data-isotope-group="gallery" class="btn">With Swimming Pool</button>
        </div>
      </div> -->
      <div class="container-fluid offset-11">
        <div data-isotope-layout="masonry" data-isotope-group="gallery" class="isotope offset-1 row cobbles-gallery custom-hover">
		<?php
			//echo $numFiles; //debug code
			//print_r($pictures); //debug code
			foreach($pictures as $pics){
				echo'<div data-filter="type-1" class="isotope-item isotope-width-1">';
            		echo'<div class="thumbnail-gallery">';
              			echo'<img src="'.$pics.'" alt="" width="370" height="250">';             
            		echo'</div>';
          		echo'</div>';
				
			}
         ?> 
          
      </div>
    </section>
    <?php include('includes/smallFooter.php'); ?>
</body>

</html>