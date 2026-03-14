<?php 
$title = "Just the Facts! | RCL Solar | New Jerseys Premier Solar Installer! Since 1999";
include ('includes/head.php'); ?>

<body>
  <!-- Page-->
  <div class="page">
    <!-- Page Header-->
   <?php include ('includes/header.php'); ?>
    <section class="section-full text-left">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>FAQ</h1>
            <p></p>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="#">Solar</a>
              </li>
              <li class="active">FAQ</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!--Section Some of your questions-->
    <section class="section-md text-left">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <h2>Solar System FAQ</h2>
            <hr>
            <p>If you need help, we have a list of frequently asked questions and answers. We strive to give you the best buying experience possible. Click a question below to view the answer.</p>
            <div class="accordion-custom" id="accordion-1">
<?php 
			$faqs = getFaqs();
			foreach($faqs as $item){
              echo '<div class="accordion-item">';
                echo'<a data-toggle="collapse" data-parent="#accordion-1" href="" class="accordion-item-title">'.htmlspecialchars ($item['question']).'</a>';
                echo '<div id="collapseOne-1" class="collapse in">';
                  echo '<div class="accordion-item-content">';
                    echo htmlspecialchars ($item['answer']);
                  echo '</div>';
                echo '</div>';
              echo '</div>';
			}
 ?>
             
            </div>
          </div>
        </div>
      </div>
    </section>

	<?php include('includes/smallFooter.php'); ?>
  </div>
  <!-- Global Mailform Output-->
  
</body>

</html>