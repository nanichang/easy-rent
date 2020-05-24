
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="RentsNG" />
    <meta name="description" content="Rents.NG" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rents.NG - Home</title>

    <!-- Favicon -->
   <link rel="shortcut icon" href="assets/frontend/images/favicon.ico" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="assets/frontend/css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="assets/frontend/css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="assets/frontend/css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="assets/frontend/css/select2/select2.css" />
    <link rel="stylesheet" href="assets/frontend/css/range-slider/ion.rangeSlider.css" />
    <link rel="stylesheet" href="assets/frontend/css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/frontend/css/magnific-popup/magnific-popup.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="assets/frontend/css/style.css" />

 </head>

<body>

<?php include('partial/frontend/navbar.php'); ?>
<!--=================================
banner -->
<section class="banner-bg-video bg-holder bg-overlay-black-30" data-jarallax='{"speed": 0.6}' data-jarallax-video="https://www.youtube.com/embed/kacyaEXqVhs">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
        <h1 class="text-white mb-2">Discover a place you’ll love to live</h1>
        <span class="mb-5 text-white banner-bg-video-sub-title">Over<strong class="text-primary"> 40000 </strong>latest home retailer</span>
        <div class="bg-overlay-black-50 p-4">
          <div class="position-relative">
            <ul class="nav nav-tabs nav-tabs-02 mb-3 justify-content-center" id="pills-tab" role="tablist">
              <!-- <li class="nav-item mr-1">
                <a class="nav-link active" id="buy-tab" data-toggle="pill" href="#buy" role="tab" aria-controls="buy" aria-selected="true">Buy</a>
              </li> -->
              <li class="nav-item mr-1">
                <a class="nav-link active" id="rent-tab" data-toggle="pill" href="#rent" role="tab" aria-controls="rent" aria-selected="false">Properties</a>
              </li>
              <li class="nav-item mr-1">
                <a class="nav-link" id="sold-tab" data-toggle="pill" href="#sold" role="tab" aria-controls="sold" aria-selected="false">Agents</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <!-- <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                <div class="search">
                  <i class="fas fa-search"></i>
                  <input type="text" class="form-control" placeholder="Search for Homes by Address, City, Zip Code or MLS#....">
                </div>
              </div> -->
              <div class="tab-pane fade show active" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                <div class="search">
                  <i class="fas fa-search"></i>
                  <input type="text" class="form-control" placeholder="Search for Homes by Address, City...">
                </div>
              </div>
              <div class="tab-pane fade" id="sold"  role="tabpanel" aria-labelledby="sold-tab">
                <div class="search">
                  <i class="fas fa-search"></i>
                  <input type="text" class="form-control" placeholder="Search for agent....">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
Featured properties-->
<section class="space-ptb">
  <div class="container-fluid container-space">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-title">
          <h2>Newly listed properties</h2>
          <p>Find your dream home from our Newly added properties</p>
        </div>
      </div>
    </div>
    <div class="owl-carousel owl-nav-top-left" data-animateOut="fadeOut" data-nav-arrow="true" data-items="4" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="30">
      <div class="item">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="assets/frontend/images/property/grid/01.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md badge-primary">Bungalow</span>
              <span class="badge badge-md badge-info">Sale </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="assets/frontend/images/avatar/01.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Alice Williams</a>
                <span class="d-block">Company Agent</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 06</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="">Ample apartment at last floor </a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
              <div class="property-price">$150.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="assets/frontend/images/property/grid/03.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md badge-primary">Summer House</span>
              <span class="badge badge-md badge-info">Hot </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="assets/frontend/images/avatar/03.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Felica queen</a>
                <span class="d-block">Investment</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 03</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Contemporary apartment</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>6 months ago</span>
              <div class="property-price">$658.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,189m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="assets/frontend/images/property/grid/04.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md badge-primary">Duplex</span>
              <span class="badge badge-md badge-info">Hot </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="assets/frontend/images/avatar/04.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Sara lisbon</a>
                <span class="d-block">Construction</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 04</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Family home for sale</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville, ky</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>12 months ago</span>
              <div class="property-price">$485.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>1</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>2,356m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="assets/frontend/images/property/grid/05.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md badge-primary">Penthouses</span>
              <span class="badge badge-md badge-info">Rent </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="assets/frontend/images/avatar/05.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Mellissa Doe</a>
                <span class="d-block">Founder & CEO</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 10</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Luxury villa with pool</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indian St. Missoula</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 years ago</span>
              <div class="property-price">$698.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>5</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="assets/frontend/images/property/grid/06.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md badge-primary">Studio</span>
              <span class="badge badge-md badge-info">New </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="assets/frontend/images/avatar/06.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Michael Bean</a>
                <span class="d-block">Research</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 02</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">184 lexington avenue</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Hamilton rd. willoughby, oh</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>3 years ago</span>
              <div class="property-price">$236.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,657m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="assets/frontend/images/property/grid/02.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md badge-primary">Summer House</span>
              <span class="badge badge-md badge-info">Hot </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="assets/frontend/images/avatar/02.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Felica queen</a>
                <span class="d-block">Investment</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 03</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Contemporary apartment</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>6 months ago</span>
              <div class="property-price">$658.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,189m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Featured properties-->

<!--=================================
  Neighborhoods -->
<section class="space-pb">
  <div class="container-fluid container-space">
    <div class="row align-items-center">
      <div class="col-lg-9">
        <div class="section-title mb-0">
          <h2>Explore the Neighborhoods</h2>
          <p>To browse and buy in your areas of interest, look for properties by neighborhoods.</p>
        </div>
      </div>
      <div class="col-lg-3 text-lg-right">
        <a class="btn btn-primary" href="about-us.html">View all listing</a>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-xl-2 col-md-4 col-sm-6 mb-xl-0 mb-4">
        <div class="map-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 200px;"></iframe>
          <div class="map-box-info">
            <h6><a href="#">Green leaf apartments</a></h6>
            <p class="mb-0">What drives me? The thing that drives me most.</p>
            <a class="btn btn-link p-0 mt-2" href="#">See more <i class="fas fa-long-arrow-alt-right pl-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-4 col-sm-6 mb-xl-0 mb-4">
        <div class="map-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 200px;"></iframe>
          <div class="map-box-info">
            <h6><a href="#">Vermont Dr. Hephzibah</a></h6>
            <p class="mb-0">Reflect and experiment until you find the.</p>
            <a class="btn btn-link p-0 mt-2" href="#">See more <i class="fas fa-long-arrow-alt-right pl-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-4 col-sm-6 mb-xl-0 mb-4">
        <div class="map-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 200px;"></iframe>
          <div class="map-box-info">
            <h6><a href="#">Master valley estates</a></h6>
            <p class="mb-0">Let success motivate you. Find a picture.</p>
            <a class="btn btn-link p-0 mt-2" href="#">See more <i class="fas fa-long-arrow-alt-right pl-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-4 col-sm-6 mb-lg-0 mb-4">
        <div class="map-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 200px;"></iframe>
          <div class="map-box-info">
            <h6><a href="#">Executive 4 bed WDM ranch</a></h6>
            <p class="mb-0">Do it today. Remind yourself of someone.</p>
            <a class="btn btn-link p-0 mt-2" href="#">See more <i class="fas fa-long-arrow-alt-right pl-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-4 col-sm-6 mb-sm-0 mb-4">
        <div class="map-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 200px;"></iframe>
          <div class="map-box-info">
            <h6><a href="#">Newport St. Mebane, NC</a></h6>
            <p class="mb-0">Make a list of your achievements toward.</p>
            <a class="btn btn-link p-0 mt-2" href="#">See more <i class="fas fa-long-arrow-alt-right pl-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="map-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 200px;"></iframe>
          <div class="map-box-info">
            <h6><a href="#">Border St. Nicholasville, KY</a></h6>
            <p class="mb-0">Give yourself the power of responsibility.</p>
            <a class="btn btn-link p-0 mt-2" href="#">See more <i class="fas fa-long-arrow-alt-right pl-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
  Neighborhoods -->

<!--=================================
Testimonial -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <h2>Testimonials</h2>
          <p>Check the listings of the best dealer on Real Villa and contact the agency or its agent by phone or contact form.</p>
        </div>
      </div>
    </div>
    <div class="testimonial-03">
      <div class="owl-carousel" data-animateOut="fadeOut" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
        <div class="item">
          <div class="row no-gutters align-items-center">
            <div class="col-md-6">
              <div class="testimonial-image">
                <img class="img-fluid w-100" src="assets/frontend/images/location/01.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="testimonial-content bg-primary">
                <p class="text-white"><i class="fas fa-quote-right quotes"></i>Thank you Martin for selling our apartment. We are delighted with the result. I can highly recommend Martin to anyone seeking a truly professional Realtor.</p>
                <div class="testimonial-name">
                  <h6 class="text-white mb-1">Lisa & Graeme</h6>
                  <span class="text-white">Hamilton Rd. Willoughby</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row no-gutters align-items-center">
            <div class="col-md-6">
              <div class="testimonial-image">
                <img class="img-fluid w-100" src="assets/frontend/images/location/02.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="testimonial-content bg-primary">
                <p class="text-white"><i class="fas fa-quote-right quotes"></i>Oliver always had a smile and was so quick to answer and get the job done.  I'll definitely suggest you to anyone we know who is selling or wanting to purchase a home. He is the best!</p>
                <div class="testimonial-name">
                  <h6 class="text-white mb-1">Jessica Alex</h6>
                  <span class="text-white">West Division Street</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Testimonial -->

<!--=================================
News, tips & articles -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>News, tips & articles</h2>
          <p>Grow your appraisal and real estate career with tips, trends, insights and learn more about our expert's advice.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="assets/frontend/images/blog/01.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Home improvement</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">7 pieces of advice to newbies</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">You are going on a cruise, but when the ship sets sail, you discover.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>02 Jan 2019</a>
              </div>
              <div class="blog-post-author">
                <span> By <a href="#"> <img class="img-fluid" src="assets/frontend/images/avatar/01.jpg" alt="">Sara lisbon </a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(12) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="assets/frontend/images/blog/02.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Tips and advice</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">Where to Invest in Real Estate</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">You will sail along until you collide with an immovable object.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>14 Feb 2019</a>
              </div>
              <div class="blog-post-author">
                <span> By <a href="#"> <img class="img-fluid" src="assets/frontend/images/avatar/02.jpg" alt="">Anne Smith</a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(32) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="assets/frontend/images/blog/03.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Market trends</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">Cutting your losses in Real Estate</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">Trying to go through life without clarity is similar to sailing.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>30 March 2019</a>
              </div>
              <div class="blog-post-author">
                <span> By <a href="#"> <img class="img-fluid" src="assets/frontend/images/avatar/03.jpg" alt="">Alice Williams</a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(45) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
News, tips & articles -->


<!--=================================
footer-->
<?php include('partial/frontend/footer.php'); ?>
<!--=================================
footer-->

<!--=================================
Javascript -->

  <!-- JS Global Compulsory (Do not remove)-->
  <script src="assets/frontend/js/jquery-3.4.1.min.js"></script>
  <script src="assets/frontend/js/popper/popper.min.js"></script>
  <script src="assets/frontend/js/bootstrap/bootstrap.min.js"></script>

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="assets/frontend/js/jquery.appear.js"></script>
  <script src="assets/frontend/js/counter/jquery.countTo.js"></script>
  <script src="assets/frontend/js/select2/select2.full.js"></script>
  <script src="assets/frontend/js/range-slider/ion.rangeSlider.min.js"></script>
  <script src="assets/frontend/js/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/frontend/js/jarallax/jarallax.min.js"></script>
  <script src="assets/frontend/js/jarallax/jarallax-video.min.js"></script>
  <script src="assets/frontend/js/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="assets/frontend/js/custom.js"></script>

</body>
</html>
