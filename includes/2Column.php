    <!--Section 2 Columns Blog-->
    <section class="section-md bg-dark text-left">
      <div class="container">
		 <h2>Videos</h2>
        <hr>
        <div class="row clearleft-custom-2">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <article class="thumbnail thumbnail-2 thumbnail-2-mod-1">
              <div class="img-wrap">
                <a href="post-page.html" class="img-block">
                  <?php include ('homeLeftVideo.php'); ?>
                </a>
              </div>
              <div class="caption">
                <h4>
                  <a href="post-page.html" class="text-sushi"><?php echo $videoLeftHeading; ?></a>
                </h4>
                <div class="caption-meta">
                  <time datetime="2021">
                    <span class="mdi mdi-calendar"></span>
                    <span><?php echo Date("F j, Y"); ?></span>
                  </time>                  
                </div>
                <p><?php echo $videoLeftText; ?></p>                
              </div>
            </article>
          </div>
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <article class="thumbnail thumbnail-2 thumbnail-2-mod-1">
              <div class="img-wrap">
                <a href="post-page.html" class="img-block">
                  <?php include ('homeRightVideo.php'); ?>
                </a>
              </div>
              <div class="caption">
                <h4>
                  <a href="post-page.html" class="text-sushi"><?php echo $videoRightHeading; ?></a>
                </h4>
                <div class="caption-meta">
                  <time datetime="2016">
                    <span class="mdi mdi-calendar"></span>
                    <span><?php echo Date("F j, Y"); ?></span>
                  </time>                  
                </div>
                <p><?php echo $videoRightText; ?></p>                
              </div>
            </article>
          </div>        
        </div>
      </div>
    </section>