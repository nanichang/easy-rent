<?php 

  ob_start();
  session_start();
  define('DIR_APPLICATION', str_replace('\'', '/', realpath(dirname(__FILE__))) . '/');
  

  unset($_SESSION['step']);
  unset($_SESSION['domain']);
  include(DIR_APPLICATION."../config.php");

 ?>

<link rel="shortcut icon" href="<?php echo WEB_URL; ?>assets/frontend/images/favicon.ico" />

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

<!-- CSS Global Compulsory (Do not remove)-->
<link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/frontend/css/font-awesome/all.min.css" />
<link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/frontend/css/flaticon/flaticon.css" />
<link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/frontend/css/bootstrap/bootstrap.min.css" />

<!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
<link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/frontend/css/select2/select2.css" />
<link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/frontend/css/range-slider/ion.rangeSlider.css" />
<link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/frontend/css/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/frontend/css/magnific-popup/magnific-popup.css" />

<!-- Template Style -->
<link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/frontend/css/style.css" />