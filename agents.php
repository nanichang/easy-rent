
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
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Agent Listing – list view </span></li>
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
            <li><a href="#">Investment <i class="fas fa-times-circle"></i> </a></li>
            <li><a class="filter-clear" href="#">Reset Search <i class="fas fa-redo-alt"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
     <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
        <div class="sidebar">
          <div class="widget">
            <div class="widget-title">
              <h6>Featured property</h6>
            </div>
            <div class="property-item mb-0">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="assets/frontend/images/property/grid/06.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md badge-primary">Studio</span>
                  <span class="badge badge-md badge-info">New </span>
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
                </div>
                <div class="property-btn">
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                </div>
              </div>
          </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h6>Recently listed properties</h6>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="assets/frontend/images/property/list/01.jpg" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="property-detail-style-01.html">3 bedroom house in gardner</a>
                <span class="text-primary">$2,456,326 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="assets/frontend/images/property/list/02.jpg" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="property-detail-style-01.html">Master valley estates</a>
                <span class="text-primary">$1,200,265 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="assets/frontend/images/property/list/03.jpg" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="property-detail-style-01.html">Green leaf apartments</a>
                <span class="text-primary">$4,645,105 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="assets/frontend/images/property/list/04.jpg" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="property-detail-style-01.html">217 central park south</a>
                <span class="text-primary">$2,565,495 </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-8">
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
            <li><a class="property-list-icon active" href="agent-list.html">
              <span></span>
              <span></span>
              <span></span>
            </a></li>
            <li><a class="property-grid-icon" href="agent-grid.html">
              <span></span>
              <span></span>
              <span></span>
            </a></li>
          </ul>
        </div>
        <div class="agent agent-03 mt-4">
          <div class="row no-gutters">
            <div class="col-lg-4 text-center border-right">
              <div class="d-flex flex-column h-100">
                <div class="agent-avatar p-3 my-auto">
                  <img class="img-fluid" src="assets/frontend/images/agent/01.jpg" alt="">
                </div>
                <div class="agent-listing text-center mt-auto">
                  <a href="#"> <strong class="text-primary d-inline-block mr-2">20</strong>Listed Properties </a>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="d-flex h-100 flex-column">
                <div class="agent-detail">
                  <div class="d-sm-flex">
                    <div class="agent-name">
                      <h5 class="mb-0"> <a href="#">Felica queen</a></h5>
                      <span>Pomegranate real estates</span>
                    </div>
                    <div class="agent-social ml-auto mt-2 mt-sm-0">
                      <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i> </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="agent-info">
                    <p class="mt-3 mb-3">And it’s not just parents that are the cause – teachers, friends, clergy members or anyone else that.</p>
                    <ul class="list-unstyled mb-0">
                      <li><strong>Office: </strong>(123) 345-6789</li>
                      <li><strong>Fax: </strong>(123) 345-6789</li>
                      <li><strong>Email: </strong>support@realvilla.demo</li>
                    </ul>
                    <ul class="list-unstyled mb-0">
                      <li><strong>Mobile: </strong>(456) 478-2589</li>
                      <li><strong>WhatsApp: </strong>(456) 478-2589</li>
                    </ul>
                  </div>
                </div>
                <div class="agent-button">
                  <a class="btn btn-light btn-lg btn-block" href="agent-detail.html">View Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="agent agent-03 mt-4">
          <div class="row no-gutters">
            <div class="col-lg-4 text-center border-right">
              <div class="d-flex flex-column h-100">
                <div class="agent-avatar p-3 my-auto">
                  <img class="img-fluid" src="assets/frontend/images/agent/02.jpg" alt="">
                </div>
                <div class="agent-listing text-center mt-auto">
                  <a href="#"> <strong class="text-primary d-inline-block mr-2">45</strong>Listed Properties </a>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="d-flex h-100 flex-column">
                <div class="agent-detail">
                  <div class="d-sm-flex">
                    <div class="agent-name">
                      <h5 class="mb-0"> <a href="#">Sara lisbon </a></h5>
                      <span>Blossom real homes</span>
                    </div>
                    <div class="agent-social ml-auto mt-2 mt-sm-0">
                      <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i> </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="agent-info">
                    <p class="mt-3 mb-3">Get the oars in the water and start rowing. Execution is the single biggest factor in achievement, so the faster.</p>
                    <ul class="list-unstyled mb-0">
                      <li><strong>Office: </strong>(123) 345-6789</li>
                      <li><strong>Fax: </strong>(123) 345-6789</li>
                      <li><strong>Email: </strong>support@realvilla.demo</li>
                    </ul>
                    <ul class="list-unstyled mb-0">
                      <li><strong>Mobile: </strong>(456) 478-2589</li>
                      <li><strong>WhatsApp: </strong>(456) 478-2589</li>
                    </ul>
                  </div>
                </div>
                <div class="agent-button">
                  <a class="btn btn-light btn-lg btn-block" href="agent-detail.html">View Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="agent agent-03 mt-4">
          <div class="row no-gutters">
            <div class="col-lg-4 text-center border-right">
              <div class="d-flex flex-column h-100">
                <div class="agent-avatar p-3 my-auto">
                  <img class="img-fluid" src="images/agent/03.jpg" alt="">
                </div>
                <div class="agent-listing text-center mt-auto">
                  <a href="#"> <strong class="text-primary d-inline-block mr-2">15</strong>Listed Properties </a>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="d-flex h-100 flex-column">
                <div class="agent-detail">
                  <div class="d-sm-flex">
                    <div class="agent-name">
                      <h5 class="mb-0"> <a href="#">Joana williams</a></h5>
                      <span>Proximity estates</span>
                    </div>
                    <div class="agent-social ml-auto mt-2 mt-sm-0">
                      <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i> </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="agent-info">
                    <p class="mt-3 mb-3">Have some fun and hypnotize yourself to be your very own “Ghost of Christmas future” and see what the future holds for you..</p>
                    <ul class="list-unstyled mb-0">
                      <li><strong>Office: </strong>(123) 345-6789</li>
                      <li><strong>Fax: </strong>(123) 345-6789</li>
                      <li><strong>Email: </strong>support@realvilla.demo</li>
                    </ul>
                    <ul class="list-unstyled mb-0">
                      <li><strong>Mobile: </strong>(456) 478-2589</li>
                      <li><strong>WhatsApp: </strong>(456) 478-2589</li>
                    </ul>
                  </div>
                </div>
                <div class="agent-button">
                  <a class="btn btn-light btn-lg btn-block" href="agent-detail.html">View Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="pagination mt-5">
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
                <img class="img-fluid" src="images/property/list/01.jpg" alt="">
                <div class="footer-recent-list-item-info">
                  <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Awesome family home</a></h6>
                  <a class="address mb-2 font-sm" href="#">Vermont dr. hephzibah</a>
                  <span class="price text-white">$3,456,235 </span>
                </div>
              </div>
            </li>
            <li>
              <div class="footer-recent-list-item">
                <img class="img-fluid" src="images/property/list/02.jpg" alt="">
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

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="assets/frontend/js/select2/select2.full.js"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="assets/frontend/js/custom.js"></script>

</body>
</html>
