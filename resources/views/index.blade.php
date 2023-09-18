<!--- adding the base layout file -->
@extends('layout.base')

<!--- adding the title tag -->
@section('title', 'Home')


<!---- link to the index.css  file -->
@section('link')
        <link rel="stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="/css/mediaQuerry.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
@endsection


@section('hero-content')
 <!--- start of adding the hero-content--->
 <section class="home" id="home">
    <div class="content">
        <p>Find Next Generation</p>
        <h3>A Better Way To Buy Propery</h3>
        <p>Bid in private, from the comfort of your home.</p>
        <a href="#" class="btn">Browse Property</a>
    </div>      
</section>
 <!--- end of adding the hero-content--->  
@endsection

@section('content')

<!--- start of the browse bid item --->
<div class="browse-bid-row-container">
    <div class="highlight">
        <div class="highlight-text">
            <h2>Browse the Highlight</h2>
        </div>
        <div class="highlight-arrow">
            <!-- Show previous and next arrow -->
            <div class="arrow prev-arrow">
                <img src="/img/arrow.png" alt="Previous Item">
            </div>
            <div class="arrow next-arrow">
                <img src="/img/right-arrow.png" alt="Next Item">
            </div>
        </div>
    </div>
    <div class="browse-bid-row">
        <!-- bid item divs (your items here) -->
         <!--- bid item div -->
         <div class="bid-item">
            <div class="item-image">
                <img src="/img/arrow.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5>Houses & Apartments</h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

        <!--- bid item div -->
        <div class="bid-item">
            <div class="item-image">
                <img src="/img/arrow.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5>Commercial Properties</h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

        <!--- bid item div -->
        <div class="bid-item">
            <div class="item-image">
                <img src="/img/arrow.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5>Industrial Properties </h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

        <!--- bid item div -->
        <div class="bid-item">
            <div class="item-image">
                <img src="/img/arrow.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5>Land Plots</h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

         <!--- bid item div -->
         <div class="bid-item">
            <div class="item-image">
                <img src="/img/arrow.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5>Students Loan </h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

<!--- End of the bid item list -->
    </div>
</div>


<!----- ===== HOW IT WORKS SECTION ---- ==== ----->
    <div class="highlight-text">
            <h2>How it works</h2>
        </div>
    <div class="how-it-works">

                <!--- start of how it works --->
                <div class="how-it-works-element">
                    <img src="/img/membership.png" alt="">
                    <h4>Register</h4>
                </div>

                <div class="how-it-works-element">
                    <img src="/img/browser.png" alt="">
                    <h4>Choose a bid</h4>
                </div>

                <div class="how-it-works-element">
                    <img src="/img/purse.png" alt="">
                    <h4>Place a deposit</h4>
                </div>

                <div class="how-it-works-element">
                    <img src="/img/pay-per-click.png" alt="">
                    <h4>Pay for your purchase</h4>
                </div>

                <div class="how-it-works-element">
                    <img src="/img/shared-housing.png" alt="">
                    <h4>Documentation and ownership of bids</h4>
                </div>



            <!--- End of how it works -->
    </div>
            </div>

    </div>


 <!--- start of the browse bid item --->
<div class="featured-items">
    <h2>Featured Items</h2>
    <div class="view-more-bids">
        <div class="txt-start-bid">
             <h5>Start winning with comfort</h5>
        </div>
        <div id="btn-view-bids">
            <button>View All</button>
        </div>
    </div>
   
    
    <div class="bid-grid-container">
         <!-- start of featured bid item -->
    <div class="bid-container">
        <div class="bid-event">
            <div class="bid-date">
                <!-- remaining days to the bidding -->
                <span>0d</span>
                <span>:</span>
                <span>5hrs</span>
                <span>:</span>
                <span>70min</span> <br>
                <a href="">
                    <span class="cart-icon">&#128722;</span>
                </a>
                
            </div>
            
            <div class="bid-image">
                <img src="/img/bld.jpg" alt="image of the bid">
            </div>
             
        </div>
    
        <div class="bid-price-and-info-container">
            <div class="bid-data">
                <a href=""><h6>Name of the item to bid</h6></a>
                <p class="bid-item-desc">Brief description of the bid item</p>
                <hr>
            </div>
        </div>
    
        <div class="bid-price-info"> 
            <div class="bidding-start-price">
                <p>Current Bid Price</p>
                <h6 class="start-bid-price">NGN 12347</h6>
            </div>
            <div class="non-bid-price">
                <p>Buy Now</p>
                <h6 class="buy-bid-item">NGN 12345677</h6>
            </div>
           
        </div>
         <button class="btn-submit-bid">Submit A Bid</button>
    </div>
   <!-- end of bid featured event -->


   <!-- start of featured bid item -->
   <div class="bid-container">
    <div class="bid-event">
        <div class="bid-date">
            <!-- remaining days to the bidding -->
            <span>0d</span>
            <span>:</span>
            <span>5hrs</span>
            <span>:</span>
            <span>70min</span> <br>
            <a href="">
                <span class="cart-icon">&#128722;</span>
            </a>
            
        </div>
        
        <div class="bid-image">
            <img src="/img/bld.jpg" alt="image of the bid">
        </div>
         
    </div>

    <div class="bid-price-and-info-container">
        <div class="bid-data">
            <a href=""><h6>Name of the item to bid</h6></a>
            <p class="bid-item-desc">Brief description of the bid item</p>
            <hr>
        </div>
    </div>

    <div class="bid-price-info"> 
        <div class="bidding-start-price">
            <p>Current Bid Price</p>
            <h6 class="start-bid-price">NGN 12347</h6>
        </div>
        <div class="non-bid-price">
            <p>Buy Now</p>
            <h6 class="buy-bid-item">NGN 12345677</h6>
        </div>
       
    </div>
     <button class="btn-submit-bid">Submit A Bid</button>
</div>
<!-- end of bid featured event -->

<!-- start of featured bid item -->
<div class="bid-container">
    <div class="bid-event">
        <div class="bid-date">
            <!-- remaining days to the bidding -->
            <span>0d</span>
            <span>:</span>
            <span>5hrs</span>
            <span>:</span>
            <span>70min</span> <br>
            <a href="">
                <span class="cart-icon">&#128722;</span>
            </a>
            
        </div>
        
        <div class="bid-image">
            <img src="/img/bld.jpg" alt="image of the bid">
        </div>
         
    </div>

    <div class="bid-price-and-info-container">
        <div class="bid-data">
            <a href=""><h6>Name of the item to bid</h6></a>
            <p class="bid-item-desc">Brief description of the bid item</p>
            <hr>
        </div>
    </div>

    <div class="bid-price-info"> 
        <div class="bidding-start-price">
            <p>Current Bid Price</p>
            <h6 class="start-bid-price">NGN 12347</h6>
        </div>
        <div class="non-bid-price">
            <p>Buy Now</p>
            <h6 class="buy-bid-item">NGN 12345677</h6>
        </div>
       
    </div>
     <button class="btn-submit-bid">Submit A Bid</button>
</div>
<!-- end of bid featured event -->
</div> 
    </div>
         
    <!---- =========== Upcoming Auction Section ==== ----->
    <div class="upcoming-auctions-section">
        <div>
            <h2>Upcoming Auctions</h2>
            <p>You are welcome to attend and join in the action at any of our upcoming auctions.</p>
        </div>
    </div>

    <!----Start of Active bid -->
    <div class="auction-action" >
        <div class="arrow">
            <span>&#8594;</span>
            <button data-target="all-content">All</button>
        </div>
    
        <div id="live-action">
            
            <button data-target="live-content">Live Action</button>
        </div>
    
        <div id="auction-event">
            
            <button data-target="action-events-content">Action Events</button>
        </div>
    
        <div id="buy-bid-now">
            
            <button data-target="buy-now-content">Buy Now</button>
        </div>
    </div> 
    <!--- End of active bid -->
    
  
    <div id="all-content" class="contents" style="display: block;"> 
        <p>Get the data from the database</p>

  <!---- startr Show available items for bidding == ALL --->
        <div class="active-bid">

            <div class="active-bid-image">
                <img src="/img/bld.jpg" alt="image of the bid">
            </div>

            <div class="active-bid-data">
               <a href=""><h3>Name of the active bid</h3></a> 
               <div class="info">
                <p> <b>Listing </b> <span>87893</span></p>
                <p><b> Item ID:</b> <span>78898932</span></p>
            </div>  
            <div>
                 <p class="bid-item-desc">
                    Brief description of the bid item
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                 </p>
            </div>
            <div class="bid-price-info"> 
                <div class="bidding-start-price">
                    <p>Current Bid Price</p>
                    <h6 class="start-bid-price">NGN 12347</h6>
                </div>
                <div class="non-bid-price">
                    <p>Buy Now</p>
                    <h6 class="buy-bid-item">NGN 12345677</h6>
                </div>
               
            </div>

            <div class="bid-price-info"> 
                <div class="bidding-start-price">
                    <p>Total Bids</p>
                    <h6 class="start-bid-price">12347</h6>
                </div>
                <div class="non-bid-price">
                    <p>Last Bid</p>
                    <h6 class="buy-bid-item">18 min ago</h6>
                    <div class="bid-inquiry"><button>Send Bid Inquiry</button></div>
                </div>
               
            </div>
           
            
            </div>

            <div class="close-bids">
                <p>Bidding ends in....</p>
                <h6>0d : 17h : 55min : 23s</h6>
                <button class="submit-bid-button">Submit A Bid</button>
            </div>
            

        </div>
        <!--- end of the ongoing bid -->




    <!--- start of  ongoing bid -->
        <div class="active-bid">

            <div class="active-bid-image">
                <img src="/img/bld.jpg" alt="image of the bid">
            </div>

            <div class="active-bid-data">
               <a href=""><h3>Name of the active bid</h3></a> 
               <div class="info">
                <p> <b>Listing </b> <span>87893</span></p>
                <p><b> Item ID:</b> <span>78898932</span></p>
            </div>  
            <div>
                 <p class="bid-item-desc">
                    Brief description of the bid item
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                 </p>
            </div>
            <div class="bid-price-info"> 
                <div class="bidding-start-price">
                    <p>Current Bid Price</p>
                    <h6 class="start-bid-price">NGN 12347</h6>
                </div>
                <div class="non-bid-price">
                    <p>Buy Now</p>
                    <h6 class="buy-bid-item">NGN 12345677</h6>
                </div>
               
            </div>

            <div class="bid-price-info"> 
                <div class="bidding-start-price">
                    <p>Total Bids</p>
                    <h6 class="start-bid-price">12347</h6>
                </div>
                <div class="non-bid-price">
                    <p>Last Bid</p>
                    <h6 class="buy-bid-item">18 min ago</h6>
                    <div class="bid-inquiry"><button>Send Bid Inquiry</button></div>
                </div>
               
            </div>
           
            
            </div>

            <div class="close-bids">
                <p>Bidding ends in....</p>
                <h6>0d : 17h : 55min : 23s</h6>
                <button class="submit-bid-button">Submit A Bid</button>
            </div>
            

        </div>
        <!--- end of the ongoing bid -->
    </div>

     <!---- Show available items for bidding == LIVE EVENTS(BIDDING) --->
    <div id="live-content" class="contents" style="display: none;"> 
        <h2>Show the ongoing bidding-- get the data from backend</h2>
        <div class="active-bid">

            <div class="active-bid-image">
                <img src="/img/bld.jpg" alt="image of the bid">
            </div>

            <div class="active-bid-data">
               <a href=""><h3>Name of the active bid</h3></a> 
               <div class="info">
                <p> <b>Listing </b> <span>87893</span></p>
                <p><b> Item ID:</b> <span>78898932</span></p>
            </div>  
            <div>
                 <p class="bid-item-desc">
                    Brief description of the bid item
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                 </p>
            </div>
            <div class="bid-price-info"> 
                <div class="bidding-start-price">
                    <p>Current Bid Price</p>
                    <h6 class="start-bid-price">NGN 12347</h6>
                </div>
                <div class="non-bid-price">
                    <p>Buy Now</p>
                    <h6 class="buy-bid-item">NGN 12345677</h6>
                </div>
               
            </div>

            <div class="bid-price-info"> 
                <div class="bidding-start-price">
                    <p>Total Bids</p>
                    <h6 class="start-bid-price">12347</h6>
                </div>
                <div class="non-bid-price">
                    <p>Last Bid</p>
                    <h6 class="buy-bid-item">18 min ago</h6>
                    <div class="bid-inquiry"><button>Send Bid Inquiry</button></div>
                </div>
               
            </div>
           
            
            </div>

            <div class="close-bids">
                <p>Bidding ends in....</p>
                <h6>0d : 17h : 55min : 23s</h6>
                <button class="submit-bid-button">Submit A Bid</button>
            </div>
            

        </div>
        <!--- end of the ongoing bid -->
    </div>

     <!---- Show available items for bidding == NEXT BIDDING ITEMS --->
    <div id="action-events-content" class="contents" style="display: none;"> 
          <h2>Event contents --- Get the data from database </h2>
          <h1>Testing if the data is passed to the all-container</h1>
    </div>

     <!---- Show available items for bidding == BID ITEMS FOR SALES --->
    <div id="buy-now-content" class="contents" style="display: none;"> 
        <h2>Buy Now view==== Get the bid items from the database </h2>

        <p>BUY NOW!!!!!!</p>
        <!---- startr Show available items for bidding == ALL --->
        <div class="active-bid">

            <div class="active-bid-image">
                <img src="/img/bld.jpg" alt="image of the bid">
            </div>

            <div class="active-bid-data">
               <a href=""><h3>Name of the active bid</h3></a> 
               <div class="info">
                <p> <b>Listing </b> <span>87893</span></p>
                <p><b> Item ID:</b> <span>78898932</span></p>
            </div>  
            <div>
                 <p class="bid-item-desc">
                    Brief description of the bid item
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                 </p>
            </div>
            <div class="bid-price-info"> 
                <div class="bidding-start-price">
                    <p>Current Bid Price</p>
                    <h6 class="start-bid-price">NGN 12347</h6>
                </div>
                <div class="non-bid-price">
                    <p>Buy Now</p>
                    <h6 class="buy-bid-item">NGN 12345677</h6>
                </div>
               
            </div>

            <div class="bid-price-info"> 
                <div class="bidding-start-price">
                    <p>Total Bids</p>
                    <h6 class="start-bid-price">12347</h6>
                </div>
                <div class="non-bid-price">
                    <p>Last Bid</p>
                    <h6 class="buy-bid-item">18 min ago</h6>
                    <div class="bid-inquiry"><button>Send Bid Inquiry</button></div>
                </div>
               
            </div>
           
            
            </div>

            <div class="close-bids">
                <p>Bidding ends in....</p>
                <h6>0d : 17h : 55min : 23s</h6>
                <button class="submit-bid-button">Submit A Bid</button>
            </div>
            

        </div>
        <!--- end of the ongoing bid -->
    </div>
    
    
    
@endsection