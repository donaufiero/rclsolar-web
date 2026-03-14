<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<?php echo "\n<!-- START head -->\n"; include __DIR__ . '/includes/head.php'; echo "\n<!-- END head -->\n"; ?>

<body>
  <!-- Page-->
  <div class="page">

    <?php echo "\n<!-- START header -->\n"; include __DIR__ . '/includes/header.php'; echo "\n<!-- END header -->\n"; ?>

    <?php echo "\n<!-- START swiper -->\n"; include __DIR__ . '/includes/swiper.php'; echo "\n<!-- END swiper -->\n"; ?>

    <?php echo "\n<!-- START homePageForm -->\n"; include __DIR__ . '/includes/homePageForm.php'; echo "\n<!-- END homePageForm -->\n"; ?>

    <?php echo "\n<!-- START specialistsHome -->\n"; include __DIR__ . '/includes/specialistsHome.php'; echo "\n<!-- END specialistsHome -->\n"; ?>

    <?php echo "\n<!-- START ourAdvantages -->\n"; include __DIR__ . '/includes/ourAdvantages.php'; echo "\n<!-- END ourAdvantages -->\n"; ?>

    <?php echo "\n<!-- START recentHome -->\n"; include __DIR__ . '/includes/recentHome.php'; echo "\n<!-- END recentHome -->\n"; ?>

    <?php echo "\n<!-- START testimonialsHome -->\n"; include __DIR__ . '/includes/testimonialsHome.php'; echo "\n<!-- END testimonialsHome -->\n"; ?>

    <?php echo "\n<!-- START footer -->\n"; include __DIR__ . '/includes/footer.php'; echo "\n<!-- END footer -->\n"; ?>

  </div>
</body>
</html>