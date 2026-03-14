<footer class="page-foot text-left bg-gray">
      <section class="footer-content">
        <div class="container">
          <div class="row flow-offset-3">
            <div class="col-xs-12 col-sm-6 col-lg-3">
              <div class="rd-navbar-brand">
                <a href="index.html" class="brand-name">
                  <img src="images/Web_Logo_header.webp" alt="RCL Enterpries New Jerseys number one solar panel installer" width="119px" height="42px">
                </a>
              </div>
              <p><?php echo $tagLine ; ?></p>
              <address class="address">
                <dl>
                  <dt>Headquarters:</dt>
                  <dd><?php echo $hqAddress; ?></dd>
                </dl>
                <dl class="dl-horizontal-mod-1">
                  <dt>Phone</dt>
                  <dd>
                    <a class="homebottext" href="callto:#" class="text-primary"><?php echo $hqPhone; ?></a>
                  </dd>
                </dl>
                <dl class="dl-horizontal-mod-1">
                  <dt>Fax</dt>
                  <dd>
                    <a class="homebottext" href="callto:#" class="text-primary"><?php echo $hqFax; ?></a>
                  </dd>
                </dl>
                <dl class="dl-horizontal-mod-1">
                  <dt>Email</dt>
                  <dd>
                    <a class="homebottext" href="mailto:#" class="text-primary"><?php echo $hqEmail; ?></a>
                  </dd>
                </dl>
              </address>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-6">
				<img src="images/RCL_family_2023.jpg" alt="" width="370" height="250">
			</div>
            
            <?php include('includes/footerForm.php'); ?>
          </div>
        </div>
      </section>
      <section class="copyright">
        <div class="container">
          <p class="pull-sm-left">©
			  <span id="copyright-year"></span> RCL Enterprises All Rights Reserved</br>
            <a href="terms-of-service.html">Terms of Use and Privacy Policy</a>
          </p>
          <ul class="list-inline pull-sm-right">
            <li>
              <a href="<?php echo $facebook; ?>" target="_blank"  class="fa-facebook"></a>
            </li>
            <li>
              <a href="<?php echo $twitter; ?>" target="_blank"  class="fa-twitter"></a>
            </li>
            <!--<li>
              <a href="#" class="fa-pinterest-p"></a>
            </li>
            <li>
              <a href="#" class="fa-vimeo"></a>
            </li>
            <li>
              <a href="#" class="fa-google"></a>
            </li>
            <li>
              <a href="#" class="fa-rss"></a>
            </li> -->
          </ul>
        </div>
      </section>
      <!-- Rd Mailform result field-->
      <div class="rd-mailform-validate"></div>
    </footer>
    <!-- {%FOOTER_LINK}-->
  </div>
  <!-- Global Mailform Output-->
  <div id="form-output-global" class="snackbars"></div>
  <!-- PhotoSwipe Gallery-->
  <div tabindex="-1" role="dialog" aria-hidden="false" class="pswp">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
          <button title="Share" class="pswp__button pswp__button--share"></button>
          <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
          <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
        <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__cent"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Java script-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>