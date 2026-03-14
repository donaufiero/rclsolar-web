<?php
	$teams = getTeam('All','leadership');

?>



<section class="section-md text-left">
      <div class="container text-center text-sm-left">
        <h2>Leadership</h2>
        <hr>
		  <div class="row flow-offset-4">
	<?php foreach($teams as $key => $value){
        //echo  //'<div class="row flow-offset-4">';
          echo'<div class="col-xs-12 col-sm-6 col-md-4">';
            echo'<div class="team-member">';
              echo'<div class="media media-mod-3">';
                echo'<div class="media-left img-width-auto">';
					echo'<a href="'.$value['page'].'" class="img-link">';
                  echo'<img src='.$value['thumb'].' alt="" width="100" height="100">';
                echo'</div>';
                echo'<div class="media-body">';
                  echo'<h5 class="text-sushi">'.$value['fname'].' '.$value['lname'].'</h5>';
                  echo'<p>'.$value['title'].'</p>';
                  echo'<dl class="dl-horizontal-mod-1 text-ubold text-abbey">';
                    echo'<dt>tel.</dt>';
                    echo'<dd>';
                      echo'<a href="tel:#">'.$value['phone'].'</a>';
                    echo'</dd>';
                  echo'</dl>';
                echo'</div>';
              echo'</div>';
              echo'<p></p>';
            echo'</div>';
          echo'</div>';
		}
?>
        </div>
      </div>
    </section>