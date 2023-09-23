<!----
        This is the layout for the all pages of this website
            header section
            footer section
            And, any other common section of the website

            Check the public source code for the website at 
                https://github.com/hardeex/blog-website/blob/master/index/templates/home/base.html
        Adewale        
--->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <!--- set the title for each of the page-->
        <title>@yield('title')</title>
    
    

    <!--- start of links to the css files  -->
    <link rel="stylesheet" href="/css/dasboard/base-dashboard.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/mediaQuerry.css">


    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-rHK8Yvo0Hq21bHk1hiOPpGWT1H8wvcPb11TPFqEadFk5BdCiA/pz5wr5bx6F7bMd" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    @yield('link')
    <!--- end of links to the css files  -->

    <!--- start of links to the javascript files  -->
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--- Link to the main.js internal javascript file-->
    <script src="{{ asset('js/main.js') }}" defer></script>
    <!--- end of links to the javascript files  -->
</head>


<body>

<!--- start of the header section  -->
    <header class="header">
            <a href="{{ url('/') }}" class="logo">
                <img src="/img/essential.jpg" alt="Essential Nigeria Logo">
            </a>
        
               
             
         <!-- Start of the navigation bar -->
        
      
        <!-- End of the navigation bar -->

             <!-- start integrating the search form/icon, cart-btn and the responsive menue -->
             <div class="icons">
                 <!-- Person icon for registration/login -->
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>
            
            
          <!--  End of integrating the search form/icon, cart-btn and the responsive menue -->


          <!--- The pop up search form when clicked -->
            <div class="search-form">
                <input type="search" id="search-box" placeholder="search for properties, cars etc...">
                <label for="search-box" class="fas fa-search"></label>
            </div>
            <!--- End of the pop up search form when clicked -->
        
            <!-- The cart-item section when clicked --->
            <div class="cart-items-container">
                <div class="cart-item">
                    <span class="fas fa-times"></span>
                    <img src="/img/bld.jpg" alt="A building Auction">
                    <div class="content">
                        <h3>Name of the Item</h3>
                        <div class="price">NGN (Price) </div>
                    </div>
            </div>
                
                <h3>Fetch the cart items from the database.</h3> <br>
                <h4>Above is the sample of how it will look like when the data is fetched...</h4>
                
                <a href="#" class="btn-checkout">checkout now</a>
            </div>
            <!-- End of the cart-item section when clicked --->

  </header>
        <!--- The header section ends here... --->
  
       @yield('hero-content') <!-- adding an hero-image -->

    <!--- Start of the content or body of the website for each page-->
    <main>
      <section>
            @yield('content')  
      </section>
 
    </main>
    <!--- End of the content or body of the website for each page-->

    <!-- ======= Footer ======= -->
  <footer>

    <!--- start of the newsletter form -->
    <div class="footer-newsletter">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <h4>Join Our Newsletter</h4>
                  <p>Be updated on our exciting products and services</p>
                  <form action="" method="post" class="newsletter-form">
                      <input type="email" name="email" placeholder="Enter your email">
                      <input type="submit" value="Subscribe" id="btn-newsletter-submit">
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!--- end of the newsletter form -->
  
  <div class="grid-footer-container">
      <div class="footer-address">
        <h4>Essential Nigeria</h4>
        <p>
          24, Iyana-Street, <br>
          Alausa, Ikeja, <br>
          Nigeria. <br><br>
          <strong>Phone:</strong> +23481 4841  3982<br>
          <strong>Email:</strong> admin@essential.com<br>
        </p>
      </div>

      <div class="footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="footer-services">
        <h4>Our Services</h4>
        <ul>         
          <li><i class="bx bx-chevron-right"></i> <a href="#">Essential Auctions</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Essential Hotels</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Business Directories</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Email Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Job Search</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Online Store</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Health</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Student Loans</a></li>
        </ul>
      </div>
      
      <div class="footer-social-links">
        <h4>Our Social Networks</h4>
        <p>Be updated on beneficial information...</p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>          
      </div>
      </div>
  </div>

 
    <div class="copyright-container">
      <hr>
      <div class="copyright">        
        &copy; Copyright <strong><span>Essential Nigeria</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer>
  <!-- End Footer -->


 
  <!--- implementing automated scroll up--->
  <div id="scroll-to-top">
    <a href="#" title="Scroll to top"><i class="fas fa-arrow-up"></i></a>
  </div>
  
</body>
</html>