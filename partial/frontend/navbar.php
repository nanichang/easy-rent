<?php include("config.php"); ?>

<header class="header">
  <div class="topbar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="d-block d-md-flex align-items-center text-center">
            <div class="mr-3 d-inline-block">
              <a href="tel:1-800-555-1234"><i class="fa fa-phone mr-2 fa fa-flip-horizontal"></i>1-800-555-1234 </a>
            </div>
            <div class="mr-auto d-inline-block">
              <span class="mr-2 text-white">Get App:</span>
              <a class="pr-1" href="#"><i class="fab fa-android"></i></a>
              <a href="#"><i class="fab fa-apple"></i></a>
            </div>
            
            <div class="social d-inline-block">
              <ul class="list-unstyled">
                <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fab fa-linkedin"></i> </a></li>
                <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
              </ul>
            </div>
            <div class="login d-inline-block">
              <a data-toggle="modal" data-target="#loginModal" href="#">Hello sign in<i class="fa fa-user pl-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
      <a class="navbar-brand" href="/">
        <img class="img-fluid" src="assets/frontend/images/logo.svg" alt="logo">
      </a>
      <div class="navbar-collapse collapse justify-content-center">
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>                
          </li>
              
          <li class="nav-item">
            <a class="nav-link" href="/properties.php">
              Properties
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/agents.php">
              Agents
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact.php">Contact</a>                
          </li>
        </ul>
      </div>
      <div class="add-listing d-none d-sm-block">
        <a class="btn btn-primary btn-md" href="register.php"> <i class="fa fa-plus-circle"></i>Register</a>
      </div>
    </div>
  </nav>
</header>


<div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form class="form-row mt-4 align-items-center">
              <div class="form-group col-sm-12">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="form-group col-sm-12">
                <input type="Password" class="form-control" placeholder="Password">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="#"><b>Already Registered User? Click here to login</b></a></li>
                </ul>
              </div>
            </form>
            <div class="login-social-media border pl-4 pr-4 pb-4 pt-0 rounded">
              <div class="mb-4 d-block text-center"><b class="bg-white pl-2 pr-2 mt-3 d-block">Login or Sign in with</b></div>
              <form class="row">
                <div class="col-sm-6">
                  <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn google-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                </div>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
            <form class="form-row mt-4 mb-5 align-items-center">
              <div class="form-group col-sm-12">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="form-group col-sm-12">
                <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group col-sm-12">
                <input type="Password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group col-sm-12">
                <input type="Password" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="#"><b>Already Registered User? Click here to login</b></a></li>
                </ul>
              </div>
            </form>
            <div class="login-social-media border pl-4 pr-4 pb-4 pt-0 rounded">
              <div class="mb-4 d-block text-center"><b class="bg-white pl-2 pr-2 mt-3 d-block">Login or Sign in with</b></div>
              <form class="row">
                <div class="col-sm-6">
                  <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn google-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>