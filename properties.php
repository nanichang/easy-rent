
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

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="assets/frontend/css/select2/select2.css" />
    <link rel="stylesheet" href="assets/frontend/css/range-slider/ion.rangeSlider.css" />

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
breadcrumb -->
<div class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html"> <i class="fas fa-home"></i> </a></li>
          <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="#">Library</a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Property List </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
breadcrumb -->

<!--=================================
Listing – grid view -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-title mb-3 mb-lg-4">
          <h2><span class="text-primary">156</span> Results</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="property-filter-tag">
          <ul class="list-unstyled">
            <li><a href="#">Summer House <i class="fas fa-times-circle"></i> </a></li>
            <li><a class="filter-clear" href="#">Reset Search <i class="fas fa-redo-alt"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 mb-5 mb-lg-0">
        <div class="sidebar">
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Advanced filter</h6>
              <a class="ml-auto" data-toggle="collapse" href="#filter-property" role="button" aria-expanded="false" aria-controls="filter-property"> <i class="fas fa-chevron-down"></i> </a>
            </div>
            <div class="collapse show" id="filter-property">
              <form class="mt-3">
                <div class="input-group mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>All Type</option>
                    <option>Villa</option>
                    <option>Apartment Building</option>
                    <option>Commercial</option>
                    <option>Office</option>
                    <option>Residential</option>
                    <option>Shop</option>
                    <option>Apartment</option>
                  </select>
                </div>
                <div class="input-group mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>For Rent</option>
                    <option>For Sale</option>
                  </select>
                </div>
                <div class="input-group mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Distance from location</option>
                    <option>Within 1 mile</option>
                    <option>Within 3 miles</option>
                    <option>Within 5 miles</option>
                    <option>Within 10 miles</option>
                    <option>Within 15 miles</option>
                    <option>Within 30 miles</option>
                  </select>
                </div>
                <div class="input-group mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Bedrooms</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                  </select>
                </div>
                <div class="input-group mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Sort by</option>
                    <option>Most popular</option>
                    <option>Highest price</option>
                    <option>Lowest price</option>
                    <option>Most reduced</option>
                  </select>
                </div>
                <div class="input-group mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Select Floor</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                  </select>
                </div>
                <div class="input-group mb-2">
                  <input class="form-control" placeholder="Type (sq ft)">
                </div>
                <div class="input-group mb-2">
                  <input class="form-control" placeholder="Type (sq ft)">
                </div>
                 <div class="form-group property-price-slider mt-3">
                  <label>Select Price Range</label>
                  <input type="text" id="property-price-slider" name="example_name" value="" />
                </div>
                <div class="input-group mb-2">
                  <button class="btn btn-primary btn-block align-items-center" type="submit"><i class="fas fa-filter mr-1"></i><span>Filter</span></button>
                </div>
              </form>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Status of property</h6>
              <a class="ml-auto" data-toggle="collapse" href="#status-property" role="button" aria-expanded="false" aria-controls="status-property"> <i class="fas fa-chevron-down"></i> </a>
            </div>
            <div class="collapse show" id="status-property">
              <ul class="list-unstyled mb-0 pt-3">
                <li><a href="#">For rent<span class="ml-auto">(500)</span></a></li>
                <li><a href="#">For Sale<span class="ml-auto">(1200)</span></a></li>
              </ul>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Type of property</h6>
              <a class="ml-auto" data-toggle="collapse" href="#type-property" role="button" aria-expanded="false" aria-controls="type-property"> <i class="fas fa-chevron-down"></i> </a>
            </div>
            <div class="collapse show" id="type-property">
              <ul class="list-unstyled mb-0 pt-3">
                <li><a href="#">Residential<span class="ml-auto">(12)</span></a></li>
                <li><a href="#">Commercial<span class="ml-auto">(45)</span></a></li>
                <li><a href="#">Industrial<span class="ml-auto">(23)</span></a></li>
                <li><a href="#">Apartment<span class="ml-auto">(05)</span></a></li>
                <li><a href="#">Building code<span class="ml-auto">(10)</span></a></li>
                <li><a href="#">Communal land<span class="ml-auto">(47)</span></a></li>
                <li><a href="#">Insurability<span class="ml-auto">(32)</span></a></li>
              </ul>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h6>Mortgage calculator</h6>
            </div>
            <form>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="Total Amount">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Down Payment">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-percent"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="Interest Rate">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="Loan Term (Years)">
              </div>
              <div class="input-group mb-3 select-border">
                <select class="form-control basic-select">
                  <option>Monthly</option>
                  <option>Weekly</option>
                  <option>Yearly</option>
                </select>
              </div>
              <a class="btn btn-primary btn-block" href="#">Calculate</a>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="property-filter d-sm-flex">
          <ul class="property-short list-unstyled d-sm-flex mb-0">
            <li>
              <form class="form-inline">
                <div class="form-group d-lg-flex d-block">
                  <label class="justify-content-start">Short by:</label>
                  <div class="short-by">
                    <select class="form-control basic-select">
                      <option>Date new to old</option>
                      <option>Price Low to High</option>
                      <option>Price High to Low</option>
                      <option>Date Old to New</option>
                      <option>Date New to Old</option>
                    </select>
                  </div>
                </div>
              </form>
            </li>
          </ul>
          <ul class="property-view-list list-unstyled d-flex mb-0">
            <li>
              <form class="form-inline">
                <div class="form-group d-lg-flex d-block">
                  <label class="justify-content-start pr-2">Sort by: </label>
                  <div class="short-by">
                    <select class="form-control basic-select">
                      <option>12</option>
                      <option>18 </option>
                      <option>24 </option>
                      <option>64 </option>
                      <option>128</option>
                    </select>
                  </div>
                </div>
              </form>
            </li>
            <li><a href="index-half-map.html"><i class="fas fa-map-marker-alt fa-lg"></i></a></li>
            <li><a class="property-list-icon active" href="property-list.html">
              <span></span>
              <span></span>
              <span></span>
            </a></li>
            <li><a class="property-grid-icon" href="property-grid.html">
              <span></span>
              <span></span>
              <span></span>
            </a></li>
          </ul>
        </div>
        <div class="property-item property-col-list mt-4">
          <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="assets/frontend/images/property/list/01.jpg" alt="">
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
                  <a href="#"><i class="fas fa-camera"></i> 04</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">Ample apartment at last floor </a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
                    </div>
                    <div class="property-price">$150.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
                  </ul>
                  <p class="mb-0 d-none d-block mt-3">For those of you who are serious about having more, doing more, giving more and being with some understanding.</p>
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
        <div class="property-item property-col-list mt-4">
          <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="assets/frontend/images/property/list/02.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md badge-primary">Summer House</span>
                  <span class="badge badge-md badge-info">Hot </span>
                </div>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="images/avatar/02.jpg" alt="">
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
                  <a href="#"><i class="fas fa-camera"></i> 12</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">The citizen apartment 5th floor</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville, ky</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>6 months ago</span>
                    </div>
                    <div class="property-price">$250.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>3</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>2,324m</span></li>
                  </ul>
                  <p class="mb-0 d-none d-block mt-3">Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually.</p>
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
        <div class="property-item property-col-list mt-4">
          <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="assets/frontend/images/property/list/03.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md badge-primary">Summer House</span>
                  <span class="badge badge-md badge-info">Hot </span>
                </div>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="assets/frontend/images/avatar/03.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">Sara lisbon</a>
                    <span class="d-block">Company Agent</span>
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
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">Cottage woods housed for sale</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 months ago</span>
                    </div>
                    <div class="property-price">$326.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,987m</span></li>
                  </ul>
                  <p class="mb-0 d-none d-block mt-3">I truly believe Augustine’s words are true and if you look at history you know it is true. There are many people in.</p>
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
        <div class="property-item property-col-list mt-4">
          <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="assets/frontend/images/property/list/04.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md badge-primary">Summer House</span>
                  <span class="badge badge-md badge-info">Hot </span>
                </div>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="images/avatar/04.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">Anne Smith</a>
                    <span class="d-block">Company Agent</span>
                    <ul class="property-agent-contact list-unstyled">
                      <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                      <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                    </ul>
                  </div>
                </div>
                <div class="property-agent-popup">
                  <a href="#"><i class="fas fa-camera"></i> 12</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">Executive 4 bed WDM ranch</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>05 months ago</span>
                    </div>
                    <div class="property-price">$658.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
                  </ul>
                  <p class="mb-0 d-none d-block mt-3">We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks.</p>
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
        <div class="property-item property-col-list mt-4">
          <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="assets/frontend/images/property/list/05.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md badge-primary">Summer House</span>
                  <span class="badge badge-md badge-info">Hot </span>
                </div>
                <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="assets/frontend/images/avatar/05.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">Sara lisbon</a>
                    <span class="d-block">Company Agent</span>
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
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">Cottage woods housed for sale</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>11 months ago</span>
                    </div>
                    <div class="property-price">$987.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,987m</span></li>
                  </ul>
                  <p class="mb-0 d-none d-block mt-3">We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving.</p>
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
        <div class="row">
          <div class="col-12">
            <ul class="pagination mt-3">
              <li class="page-item disabled mr-auto">
                <span class="page-link b-radius-none">Prev</span>
              </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item ml-auto">
                <a class="page-link b-radius-none" href="#">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Listing – grid view -->

<!--=================================
newsletter -->
<section class="py-5 bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3 class="text-white mb-0">Sign up to our newsletter to get the latest news and offers.</h3>
      </div>
      <div class="col-md-7 mt-3 mt-md-0">
        <div class="newsletter">
          <form>
            <div class="form-group mb-0">
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-dark b-radius-left-none">Get notified</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
newsletter -->

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
          <a href="index.html"><img class="img-fluid footer-logo" src="assets/frontend/images/logo-light.svg" alt=""> </a>
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

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="assets/frontend/js/select2/select2.full.js"></script>
  <script src="assets/frontend/js/range-slider/ion.rangeSlider.min.js"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="assets/frontend/js/custom.js"></script>

</body>
</html>
