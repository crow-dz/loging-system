<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreshCart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
  </head>
  <body  data-new-gr-c-s-check-loaded="14.1074.0">
    <!--Navigation  -->
    <div class="border-bottom shadow-sm">
        <nav class="navbar navbar-light py-2">
          <div class="container justify-content-center justify-content-lg-between">
            <a class="navbar-brand" href="../index.html">
              <img src="./assets/images/logo/freshcart-logo.svg" alt="" class="d-inline-block align-text-top">
            </a>
            </span>
          </div>
        </nav>
      </div>
      <!--Section  -->
      <section class="mt-5"  >
        <div class="container">
          <!-- row -->
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
              <!-- img -->
              <img src="./assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid">
            </div>
            <!-- col -->
            <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
              <div class="mb-lg-9 mb-5">
                <h1 class="mb-1 h2 fw-bold">Sign in to FreshCart</h1>
                <p>Welcome back to FreshCart! Enter your email to get started.</p>
              </div>
    
              <form action="inc/signup.inc.php" method="post">
                <div class="row g-3">
                  <!-- row -->
    
                  <div class="col-12">
                    <!-- input -->
                    <input type="email"  name="email" class="form-control" id="inputEmail4" placeholder="Email" required="">
                  <div id="pwm-inline-icon-82911" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -29.3124px; margin-left: 334.015px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-82911" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>
                  <div class="col-12">
                    <!-- input -->
                    <input type="password"  name ="pwd"class="form-control" id="inputPassword4" placeholder="Password" required="">
                  <div id="pwm-inline-icon-27169" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -29.3124px; margin-left: 334.015px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-27169" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>
                  <div class="d-flex justify-content-between">
                    <!-- form check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <!-- label --> <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                      </label>
                    </div>
                    <div> Forgot password? <a href="../pages/forgot-password.html">Reset It</a></div>
                  </div>
                  <!-- btn -->
                  <div class="col-12 d-grid"> <button type="submit" name="submit" class="btn btn-primary">Login</button>
                  </div>
                  <!-- link -->
                  <div>Don???t have an account? <a href="../pages/signup.html"> Sign Up</a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <div class="footer mt-5">
        <div class="container">
          <footer class="row g-4 py-4">
            <div class="col-12 col-md-12 col-lg-4">
              <h6 class="mb-4 strong ">  Categories</h6>
              <div class="row">
                <div class="col-6">
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Vegetables &amp; Fruits</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link"> Breakfast &amp; instant food</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link"> Bakery &amp; Biscuits</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Atta, rice &amp; dal</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Sauces &amp; spreads</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Organic &amp; gourmet</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link"> Baby care</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Cleaning essentials</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Personal care</a></li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Dairy, bread &amp; eggs</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link"> Cold drinks &amp; juices</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link"> Tea, coffee &amp; drinks</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Masala, oil &amp; more</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Chicken, meat &amp; fish</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Paan corner</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link"> Pharma &amp; wellness</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Home &amp; office</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-grid.html" class="nav-link">Pet care</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-8">
              <div class="row g-4">
                <div class="col-6 col-sm-6 col-md-3">
                  <h6 class="mb-4">Get to know us</h6>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="../pages/about.html" class="nav-link">Company</a></li>
                    <li class="nav-item mb-2"><a href="../pages/about.html" class="nav-link">About</a></li>
                    <li class="nav-item mb-2"><a href="../pages/blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
                  </ul>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                  <h6 class="mb-4">For Consumers</h6>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
                    <li class="nav-item mb-2"><a href="../pages/shop-shop-checkout.html" class="nav-link">Shop Checkout</a></li>
                  </ul>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                  <h6 class="mb-4">Become a Shopper</h6>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper Opportunities</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas &amp; Guides</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a></li>
                  </ul>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                  <h6 class="mb-4">Freshcart programs</h6>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart programs</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos &amp; Coupons</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a></li>
                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
                  </ul>
                </div>
              </div>
            </div>
      <!-- Footer -->
          </footer >
          <div class="border-top py-4">
            <div class="row align-items-center">
              <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item text-dark">Payment Partners</li>
                  <li class="list-inline-item">
                    <a href="#!"><img src="./assets/images/payment/amazonpay.svg" alt=""></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#!"><img src="./assets/images/payment/american-express.svg" alt=""></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#!"><img src="./assets/images/payment//mastercard.svg" alt=""></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#!"><img src="./assets/images/payment/paypal.svg" alt=""></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#!"><img src="./assets/images/payment/visa.svg" alt=""></a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-7 mt-4 mt-md-0">
                <ul class="list-inline mb-0 text-lg-end text-center">
                  <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
                  <li class="list-inline-item ms-4">
                    <a href="#!"> <img src="./assets/images/appbutton/appstore-btn.svg" alt="" style="width: 140px;"></a></li>
                  <li class="list-inline-item">
                    <a href="#!"> <img src="./assets/images/appbutton/googleplay-btn.svg" alt="" style="width: 140px;"></a></li>
                </ul>
              </div>
            </div>  
          </div>
          <div class="border-top py-4">
            <div class="row align-items-center">
              <div class="col-md-6"><span class="small text-muted">Copyright 2023 ?? FreshCart eCommerce.  All rights reserved.</span></div>
              <div class="col-md-6">
                <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
                  <li class="list-inline-item text-muted">Follow us on</li>
                  <li class="list-inline-item me-1">
                    <a href="#!" class="icon-shape icon-sm "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                      </svg></a></li>
                  <li class="list-inline-item me-1">
                    <a href="#!" class="icon-shape icon-sm "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                      </svg></a></li>
                  <li class="list-inline-item">
                    <a href="#!" class="icon-shape icon-sm "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                      </svg></a></li>
                </ul>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>



