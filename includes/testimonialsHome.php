<?php
	$tests = getTestimonials('home');
?>


<!--Section Testimonials-->
    <section class="section-md text-center text-sm-left bg-clients">
      <div class="container">
        <h2 class="text-white">Testimonials</h2>
        <hr>
        <!-- Owl Carousel-->
        <div class="row flow-offset-1 clearleft-custom-2">
<?php 
		foreach($tests as $test){ 
          echo '<div class="col-xs-12 col-sm-6">';
            echo '<blockquote class="quote">';              
              echo '<cite class="text-left">';
                echo '<span class="h6 text-primary text-ubold">'.$test['name'].'</span>';
                echo '<span class="text-lightest">'.$test['title'].'</span>';
              echo '</cite>';
              echo '<p>';
                echo '<q class="text-white">'.$test['review'].'</q>';
              echo '</p>';
            echo '</blockquote>';
          echo '</div>';
		 }
?>
          <div class="col-xs-12">
            <a href="testimonials.php" class="btn btn-sushi btn-sm">read more testimonials</a>
          </div>
        </div>
      </div>
    </section>