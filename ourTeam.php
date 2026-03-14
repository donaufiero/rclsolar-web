<?php
	$title = "Our All Star Team | RCL Solar | New Jerseys Premier Solar Installer! Since 1999";
	include('includes/head.php');
?> 
<body>
  <!-- Page-->
  <div class="page">
    <!-- Page Header-->
    <?php include('includes/header.php'); ?>
    <!-- Section Title Breadcrumbs-->
    <section class="section-full text-left">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Our Team</h1>
            <p></p>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="contact-us.php">About</a>
              </li>
              <li class="active">Our Team</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!--Section Our Services-->
    <section class="section-md bg-dark text-center text-sm-left">
      <div class="container">
        <h2>Leadership</h2>
        <hr>
        <div class="row offset-11 text-left clearleft-custom-6">
<?php 
		$team = getTeam('All','leadership');
			//print_r($Specialist);
		foreach($team as $key => $value){
          echo'<div class="col-xs-12 col-sm-6 col-md-4">';
            echo'<div class="thumbnail thumbnail-3">';
              echo'<a href="'.$value['page'].'" class="img-link">';
                echo'<img src="'.$value['picture'].'" width="320" height="320" alt="">';
              echo'</a>';
              echo'<div class="caption">';
                echo'<h5>';
                  echo'<a href="'.$value['page'].'" class="text-sushi">'.htmlspecialchars($value['fname']).' '.htmlspecialchars($value['lname']).'</a>';
                echo'</h5>';
				echo'<h6>';
					echo $value['title'];
				echo'</h6>';
                echo'<p>'.substr($value['about'],0,100).'</p>';
              echo'</div>';
            echo'</div>';
          echo'</div>';
		}
?>

        </div>
      </div>
    </section>
	    <!--Section Our Services-->
    <section class="section-md bg-dark text-center text-sm-left">
      <div class="container">
        <h2>Office Staff</h2>
        <hr>
        <div class="row offset-11 text-left clearleft-custom-6">
<?php 
		$team = getTeam('All', 'office');
			//print_r($Specialist);
		foreach($team as $key => $value){
          echo'<div class="col-xs-12 col-sm-6 col-md-4">';
            echo'<div class="thumbnail thumbnail-3">';
              echo'<a href="'.$value['page'].'" class="img-link">';
                echo'<img src="'.$value['picture'].'" width="320" height="320" alt="">';
              echo'</a>';
              echo'<div class="caption">';
                echo'<h5>';
                  echo'<a href="'.$value['page'].'" class="text-sushi">'.htmlspecialchars($value['fname']).' '.htmlspecialchars($value['lname']).'</a>';
                echo'</h5>';
				echo'<h6>';
					echo $value['title'];
				echo'</h6>';
                echo'<p>'.substr($value['about'],0,100).'</p>';
              echo'</div>';
            echo'</div>';
          echo'</div>';
		}
?>

        </div>
      </div>
    </section>
    <section class="section-md bg-dark text-center text-sm-left">
      <div class="container">
        <h2>Sales Staff</h2>
        <hr>
        <div class="row offset-11 text-left clearleft-custom-6">
<?php 
		$team = getTeam('All', 'sales');
			//print_r($Specialist);
		foreach($team as $key => $value){
          echo'<div class="col-xs-12 col-sm-6 col-md-4">';
            echo'<div class="thumbnail thumbnail-3">';
              echo'<a href="'.$value['page'].'" class="img-link">';
                echo'<img src="'.$value['picture'].'" width="320" height="320" alt="">';
              echo'</a>';
              echo'<div class="caption">';
                echo'<h5>';
                  echo'<a href="'.$value['page'].'" class="text-sushi">'.htmlspecialchars($value['fname']).' '.htmlspecialchars($value['lname']).'</a>';
                echo'</h5>';
				echo'<h6>';
					echo $value['title'];
				echo'</h6>';
                echo'<p>'.substr($value['about'],0,100).'</p>';
              echo'</div>';
            echo'</div>';
          echo'</div>';
		}
?>

        </div>
      </div>
    </section>
    <!--Section Our Services-->
    <section class="section-md bg-dark text-center text-sm-left">
      <div class="container">
        <h2>Solar Installers</h2>
        <hr>
        <div class="row offset-11 text-left clearleft-custom-6">
<?php 
		$team = getTeam('All','installer');
			//print_r($Specialist);
		foreach($team as $key => $value){
          echo'<div class="col-xs-12 col-sm-6 col-md-4">';
            echo'<div class="thumbnail thumbnail-3">';
              echo'<a href="'.$value['page'].'" class="img-link">';
                echo'<img src="'.$value['picture'].'" width="320" height="320" alt="">';
              echo'</a>';
              echo'<div class="caption">';
                echo'<h5>';
                  echo'<a href="'.$value['page'].'" class="text-sushi">'.htmlspecialchars($value['fname']).' '.htmlspecialchars($value['lname']).'</a>';
                echo'</h5>';
				echo'<h6>';
					echo $value['title'];
				echo'</h6>';
                echo'<p>'.substr($value['about'],0,100).'</p>';
              echo'</div>';
            echo'</div>';
          echo'</div>';
		}
?>

        </div>
      </div>
    </section>
   <?php include('includes/smallFooter.php'); ?>
</body>

</html>