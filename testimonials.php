<?php 
	$title = "Testimonials | RCL Solar | New Jerseys Premier Solar Installer! Since 1999";
	include('includes/head.php');

?>

<body>
  <!-- Page-->
  <div class="page">
    <!-- Page Header-->
    <?php include('includes/header.php'); ?>&gt;
    <section class="section-full text-left">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Testimonials</h1>
            <p></p>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="about.php">About</a>
              </li>
              <li class="active">Testimonials</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!--Section 3 Columns Blog-->
    <section class="section-md bg-dark text-left">
      <div class="container">
        <div class="row clearleft-custom-3">
<?php
		$tests = getTestimonials('full');
		foreach($tests as $test){ 
          echo'<div class="col-xs-12 col-sm-6 col-lg-4">';
            echo'<article class="thumbnail thumbnail-2 thumbnail-2-mod-1">';
              //echo'<div class="img-wrap">';
                //echo'<a href="post-page.html" class="img-block">';
                 //echo'<img src="images/three-column-blog-1.jpg" alt="" width="370" height="250">';
                //echo'</a>';
              //echo'</div>';
              echo'<div class="caption">';
                echo'<h5>';
                  echo'<a href="post-page.html" class="text-sushi">'.$test['title'].'</a>';
                echo'</h5>';
                echo'<div class="caption-meta">';
                  //echo'<time datetime="2016">';
                    //echo'<span class="mdi mdi-calendar"></span>';
                    //echo'<span>'.$test['date'].'</span>';
                  //echo'</time>';
                  echo'<a href="#">';
                    echo'<span class="mdi mdi-account"></span>';
                    echo'<span>'.$test['name'].'</span>';
                  echo'</a>';
                echo'</div>';
                echo'<p>'.$test['review'].'</p>';
                /*echo'<div class="post-meta-bottom">';
                  echo'<a href="post-page.html" class="meta-link">Real Estate</a>, &nbsp;';
                  echo'<a href="post-page.html" class="meta-link">News</a>, &nbsp;';
                  echo'<a href="post-page.html" class="meta-link">Berlin</a>';
                echo'</div>';*/
              echo'</div>';
            echo'</article>';
          echo'</div>';
		}
?>
         
          
          
        
     <!-- <div class="col-xs-12 offset-11">
        <ul class="pagination">
          <li class="disabled">
            <span class="fa-chevron-left"></span>
          </li>
          <li class="active">
            <span>1</span>
          </li>
          <li>
            <a href="#">2</a>
          </li>
          <li>
            <a href="#">3</a>
          </li>
          <li>
            <a href="#">4</a>
          </li>
          <li>
            <a href="#" class="fa-chevron-right"></a>
          </li>
        </ul>
      </div> -->
  </div>
  </div>
  </section>
  <?php include('includes/smallFooter.php'); ?>
</body>

</html>