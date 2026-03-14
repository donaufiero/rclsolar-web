<!--Section our team
    <section class="section-md">
      <div class="container"> -->
	<section class="section-md bg-dark text-left">
      <div class="container">
        <h2>Our Solar Specialists</h2>
        <hr>
        <!-- Owl Carousel-->	
		
        <div data-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-stage-padding="0" data-loop="false" data-margin="30" data-dots="true" data-autoplay="true" class="owl-carousel owl-carousel-mod-3">
		<?php 
		$Specialist = getSpecialist('home');	
		foreach($Specialist as $key =>$items){
				
          echo '<div class="owl-item">';
            echo '<div class="team-member">';
              echo'<div class="media media-mod-3">';
                echo '<div class="media-left img-width-auto">';
                  echo '<img alt="'.$items['name'].'" src="'.$items['thumb'].'" loading="lazy" width="100" height="100">';
               echo '</div>';
                echo '<div class="media-body">';
                  echo '<h5 class="text-sushi">'.$items['name'].'</h5>';
                  echo '<p>'.$items['title'] .'</p>';
                  echo '<dl class="dl-horizontal-mod-1 text-ubold text-abbey">';
                    echo '<dt>email: </dt>';
                    echo '<dd>';
                      echo '<a href="mailto:'.$items['email'].'">'.$items['email'].'</a>';
                    echo '</dd>';
                  echo '</dl>';
				//echo '<dl class="dl-horizontal-mod-1 text-ubold text-abbey">';
                    //echo '<dt>phone: </dt>';
                    //echo '<dd>';
                      //echo '<a href="callto:'.$items['phone'].'">'.$items['phone'].'</a>';
                    //echo '</dd>';
                  //echo '</dl>';
                echo '</div>';
              echo '</div>';
              echo '<p>'.$items['description'] .'</p>';
              echo '<a href='.$items['page'].' class="btn btn-sm btn-primary">Get in touch</a>';
            echo '</div>';
          echo '</div>';
		}
		?>			
        </div>		  
      </div>
    </section>