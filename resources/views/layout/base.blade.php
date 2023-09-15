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
    
    

    <!--- links to the css and javascripts  -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--- Link to the main.js internal javascript file-->
    <script src="{{ asset('js/main.js') }}" defer></script>
</head>


<body>

<!--- start of the header section  -->
    <header class="header">
            <a href="#" class="logo">
                <img src="images/logo.png" alt="Essential Nigeria Logo">
            </a>
        
            <!-- start of the navigatio bar -->
            <nav class="navbar">
                <a href="#home">Home</a>
                <div class="dropdown">
                    <a href="#auction">Auction</a>
                    <div class="dropdown-content">
                        <a href="#">Building</a>
                        <a href="#">Clothes</a>
                        <a href="#">Cars</a>
                        <a href="#">Computer Gadgets</a>
                    </div>
                </div>
                <a href="#about">About Us</a>
                <a href="#support">Support</a>
                <a href="#newletter">Newsletter</a>
            </nav>
             <!-- End of the navigatio bar -->
        
             <!-- start integrating the search form/icon, cart-btn and the responsive menue -->
            <div class="icons">
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
  

    <!--- Start of the content or body of the website for each page-->
    <main>
        @section('body')
            
        @endsection
    </main>
    <!--- End of the content or body of the website for each page-->

    <!--- The start of the footer page for each page--->
    <footer>

    </footer>
    <!--- The end of the footer code for each layout -->
    
</body>
</html>