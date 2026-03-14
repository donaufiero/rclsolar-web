<!--Section Recent Properties-->
    <section class="section-md text-center text-sm-left">
      <div class="container">
        <h2>Recent Installations</h2>
        <hr>
        <div class="row clearleft-custom">
<?php
		$i =1;
		foreach($recents as $recent){ 
          echo'<div class="col-xs-12 col-sm-6 col-md-4">';
            echo'<div class="thumbnail thumbnail-3">';
				//echo'<a href="#" class="img-link">';
                echo'<img src="'.$recent['image'].$i.'.webp" loading="lazy" alt="Recent Solar Panel Installation in New Jersey" width="370" height="250">';
              echo'</a>';
              echo'<div class="caption">';
                echo'<h4>';
                  echo $recent['location'];
               echo'</h4>';
                echo'<span class="thumbnail-price h5">'.$recent['power'];
                echo'</span>';                
                echo'<p class="text-abbey">'.$recent['description'].'</p>';
              echo'</div>';
            echo'</div>';
          echo'</div>';
			$i++;
		} ?>
        </div>
      <!--  <a href="property-catalog-grid.html" class="btn btn-sm btn-sushi offset-11">view all properties</a> -->
      </div>
    </section>