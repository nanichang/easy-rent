
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Real Villa - Real Estate HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Real Villa - Real Estate HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/frontend/images/favicon.ico" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="assets/frontend/css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="assets/frontend/css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="assets/frontend/css/bootstrap/bootstrap.min.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="assets/frontend/css/style.css" />

  </head>

<body>

<!--=================================
header -->
  <?php include('partial/frontend/navbar.php'); ?>
<!--=================================
 header -->

<!--=================================
Breadcrumb -->
<div class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/"> <i class="fas fa-home"></i> </a></li>
          <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="#">Pages</a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Create an account </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
Breadcrumb -->

<!--=================================
Login -->
<section class="space-ptb login">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-10">
        <div class="section-title">
          <h2 class="text-center">Create an Account</h2>
        </div>
        <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link " id="agent-tab" data-toggle="tab" href="#agent" role="tab" aria-controls="agent" aria-selected="false">Agent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="landlord-tab" data-toggle="tab" href="#landlord" role="tab" aria-controls="landlord" aria-selected="true">Landlord</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="regular-user-tab" data-toggle="tab" href="#regular-user" role="tab" aria-controls="regular-user" aria-selected="true">Regular User</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade" id="agent" role="tabpanel" aria-labelledby="agent-tab">
            <form class="form-row mt-4 align-items-center">
              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="#">Already Registered User? Click here to login</a></li>
                </ul>
              </div>
            </form>
          </div>
          <div class="tab-pane fade show active" id="landlord" role="tabpanel" aria-labelledby="landlord-tab">
            <form class="form-row mt-4 mb-5 align-items-center" method="POST" action="user/registration.php">
              <div class="form-group col-sm-12">
                <label>Fullname:</label>
                <input type="text" name="o_name" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="o_email" placeholder="">
              </div>

              <div class="form-group col-sm-12">
                <label>Phone Number:</label>
                <input type="email" class="form-control" name="o_contact" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="password" class="form-control" name="o_password" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="password" class="form-control" name="o_confirm_password" placeholder="">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="login.php">Already Registered User? Click here to login</a></li>
                </ul>
              </div>
            </form>
            
          </div>
          <div class="tab-pane fade" id="regular-user" role="tabpanel" aria-labelledby="regular-user-tab">
            <form class="form-row mt-4 mb-5 align-items-center">
              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="#">Already Registered User? Click here to login</a></li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Login -->

<!--=================================
footer-->
<footer class="footer bg-dark space-pt">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-contact-info">
          <h5 class="text-primary mb-4">About real villa</h5>
          <p class="text-white mb-4">Real Villa helped thousands of clients to find the right property for their needs.</p>
          <ul class="list-unstyled mb-0">
            <li> <b> <i class="fas fa-map-marker-alt"></i></b><span>214 West Arnold St. New York, NY 10002</span> </li>
            <li> <b><i class="fas fa-microphone-alt"></i></b><span>(123) 345-6789</span> </li>
            <li> <b><i class="fas fa-headset"></i></b><span>support@realvilla.demo</span> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="footer-link">
          <h5 class="text-primary mb-4">Useful links</h5>
          <ul class="list-unstyled mb-0">
            <li> <a href="#">Commercial </a> </li>
            <li> <a href="#">House </a> </li>
            <li> <a href="#">Office </a> </li>
            <li> <a href="#">Residential </a> </li>
            <li> <a href="#">Residential Tower </a> </li>
          </ul>
          <ul class="list-unstyled mb-0">
            <li> <a href="#">Beverly Hills </a> </li>
            <li> <a href="#">Los angeles </a> </li>
            <li> <a href="#">Mission Viejo </a> </li>
            <li> <a href="#">Newport  </a> </li>
            <li> <a href="#">Beach Pasadena </a> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
        <div class="footer-recent-List">
          <h5 class="text-primary mb-4">Recently listed properties</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <div class="footer-recent-list-item">
                <img class="img-fluid" src="assets/frontend/images/property/list/01.jpg" alt="">
                <div class="footer-recent-list-item-info">
                  <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Awesome family home</a></h6>
                  <a class="address mb-2 font-sm" href="#">Vermont dr. hephzibah</a>
                  <span class="price text-white">$3,456,235 </span>
                </div>
              </div>
            </li>
            <li>
              <div class="footer-recent-list-item">
                <img class="img-fluid" src="assets/frontend/images/property/list/02.jpg" alt="">
                <div class="footer-recent-list-item-info">
                  <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Lawn court villa</a></h6>
                  <a class="address mb-2 font-sm" href="#">Newport st. mebane, nc</a>
                  <span class="price text-white">$1,265,456 </span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
        <h5 class="text-primary mb-4">Subscribe us</h5>
        <div class="footer-subscribe">
          <p class="text-white">Sign up to our newsletter to get the latest news and offers.</p>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Get notified</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 text-center text-md-left">
          <a href="index.html"><img class="img-fluid footer-logo" src="images/logo-light.svg" alt=""> </a>
        </div>
        <div class="col-md-4 text-center my-3 mt-md-0 mb-md-0">
          <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-double-up"></i> </a>
        </div>
        <div class="col-md-4 text-center text-md-right">
          <p class="mb-0 text-white"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Real villa </a> All Rights Reserved </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--=================================
footer-->

<!--=================================
Javascript -->

  <!-- JS Global Compulsory (Do not remove)-->
  <script src="assets/frontend/js/jquery-3.4.1.min.js"></script>
  <script src="assets/frontend/js/popper/popper.min.js"></script>
  <script src="assets/frontend/js/bootstrap/bootstrap.min.js"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="assets/frontend/js/custom.js"></script>

</body>
</html>
