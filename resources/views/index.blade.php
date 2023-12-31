<!--- adding the base layout file -->
@extends('layout.base')

<!--- adding the title tag -->
@section('title', 'Home')


<!---- link to the index.css  file -->
@section('link')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/mediaQuerry.css">
@endsection


@section('hero-content')
 <!--- start of adding the hero-content--->
 <section class="home" id="home">
    <div class="content">
        <p>Find Next Generation</p>
        <h3>A Better Way To Buy Property</h3>
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
                <img src="/img/farming.png" alt="car icon">
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
                <img src="/img/search.png" alt="real estate icon">
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
                <img src="/img/residential.png" alt="car icon">
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
                <img src="/img/car.png" alt="car icon">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5>Vehicles</h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

        <!--- bid item div -->
        <div class="bid-item">
            <div class="item-image">
                <img src="/img/factory.png" alt="">
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
                <img src="/img/ring.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5>Jewelry and Watches</h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

         <!--- bid item div -->
         <div class="bid-item">
            <div class="item-image">
                <img src="/img/stamp.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5> Art and Collectibles </h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

<!--- End of the bid item list -->


             <!--- bid item div -->
         <div class="bid-item">
            <div class="item-image">
                <img src="/img/house-decoration.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5> Furniture and Home Decor </h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

<!--- End of the bid item list -->



             <!--- bid item div -->
         <div class="bid-item">
            <div class="item-image">
                <img src="/img/smartphone.png" alt="">
            </div>
        
            <div class="bid-details">
                <div class="bid-name">
                    <h5> Agricultural Equipment </h5>
                </div>
                <button type="submit">Show More</button>
            </div>
        </div>

<!--- End of the bid item list -->

  <!--- bid item div -->
  <div class="bid-item">
    <div class="item-image">
        <img src="/img/assets.png" alt="">
    </div>

    <div class="bid-details">
        <div class="bid-name">
            <h5> Business Asset </h5>
        </div>
        <button type="submit">Show More</button>
    </div>
</div>

<!--- End of the bid item list -->

         <!--- bid item div -->
  <div class="bid-item">
    <div class="item-image">
        <img src="/img/auction.png" alt="">
    </div>

    <div class="bid-details">
        <div class="bid-name">
            <h5> Charity Auction </h5>
        </div>
        <button type="submit">Show More</button>
    </div>
</div>

<!--- End of the bid item list -->

                 <!--- bid item div -->
  <div class="bid-item">
    <div class="item-image">
        <img src="/img/intangible-asset.png" alt="">
    </div>

    <div class="bid-details">
        <div class="bid-name">
            <h5> Intellectual Property </h5>
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


    <!--- ===== REGISTER NOW SECTION-- INDEX PAGE ===== ---->
    
    <div class="register-now" id="register-section">
        <div>
            <h2 id="txt-register">REGISTER NOW AND GET 100% BONUS ON YOUR FIRST PURCHASE</h2>
        </div>

        <div class="divide-register-info">

            <div class="why-register">
                <h3>Why Register?</h3>
                <ul>
                    <li>Get 100% Bonus towards your first purchase</li>
                    <li>View all bid item details and prices</li>
                    <li>Add items to your watchlist</li>
                    <li>Make bids to win auctions</li>
                    <li>Variety of services for the first-time buyer</li>
                </ul>
                <div style="margin-top: 8rem;">
                    <a href="{{ url('register') }}" class="btn-register">Click here to Register</a>
                </div>
            </div>
     
            <div class="why-sell">
                <h2>Why Sell?</h2>
                <div>
                    <p>
                        Are you contemplating the sale of your property or land through auction in Nigeria? You're certainly not alone;
                        each year, approximately 18,000-20,000 homes change hands via auction (and that's just for residential properties).
                        <br>
                        Opting for an auction sale is often the optimal path to achieve a swift transaction and secure the best possible
                        price on auction day. However, if you're new to the world of auctions, the prospect may initially appear somewhat intimidating.
                        At Essential Nigeria, we are committed to demystifying the auction selling process, enabling you to confidently assess whether
                        it aligns with your goals. In this comprehensive guide, we address common queries that prospective sellers often have,
                        providing you with all the essential information you need when considering the 
                        auction as your selling method..... <a href="{{ url('why-sell') }}">Read More...</a>
                    </p>
                </div>
            </div>

        </div>

    </div>
    <!--- ===== END OF REGISTER NOW SECTION-- INDEX PAGE ===== ---->
   

     <!---  ======= WHY CHOOSE US ==== ----->
         <div class="why-choose-us">
             <div>
                 <h2>Why Choose Us</h2>
                 <h5>Combining the tradition of auction sales with the convenience and reach of our cutting-edge online bidding platform.</h5>
                 <p>
                     We are a national leader in delivering unparalleled service that excels in providing
                     expert guidance, swift execution, and competitive pricing. Our groundbreaking platform
                     for investment property transactions combines the advantages of conventional auctions and sales,
                     offering speed, certainty, and profitability. Moreover, we uphold an unwavering commitment to transparency,
                     eliminating the risk of underhanded tactics such as gazumping, gazundering, or double-selling.
                 </p>
             </div>
             <div class="accordion">
                 <div class="why-us-point-header"><h4>Transparency</h4></div>
                 <div class="why-us-point-header-desc">
                     <p>
                         The auction room's open competition offers an unparalleled level of transparency in the sales process,
                         surpassing the discretion of private treaty methods. This ensures that your property finds its rightful owner,
                         the individual willing to make the highest bid on the day of the auction.
                     </p>
                 </div>
             </div>
             <div class="accordion">
                 <div class="why-us-point-header"><h4>Certainty</h4></div>
                 <div class="why-us-point-header-desc">
                     <p>
                         An auction contract is absolute and unambiguous. The moment the auctioneer's hammer signals the winning bid,
                         the buyer promptly commits by placing a 10% non-refundable deposit, and the exchange of contracts takes place
                         without delay.
                     </p>
                 </div>
             </div>
             <div class="accordion">
                 <div class="why-us-point-header"><h4>Competition</h4></div>
                 <div class="why-us-point-header-desc">
                     <p>
                         When multiple bidders vie for your property, the competitive atmosphere possesses the potential to
                         significantly elevate the final sale price, maximizing the return on your investment.
                     </p>
                 </div>
             </div>
             <div class="accordion">
                 <div class="why-us-point-header"><h4>Time</h4></div>
                 <div class="why-us-point-header-desc">
                     <p>
                         Auction contracts adhere to precise timelines, setting a fixed completion date that ensures
                         you receive the full sale amount promptly. This distinct feature sets it apart from traditional sales,
                         providing you with a clear and predictable transaction timeline.
                     </p>
                 </div>
             </div>
         </div>
     
     <!---  ======= End of WHY CHOOSE US ==== ----->


 <!--- ==== FEATURED BID ====start of the browse bid item --->
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
                    <div class="bid-inquiry"><button href="{{ url('sale-form') }}" >Send Bid Inquiry</button></div>
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
    
    

    <!---======== MEMBERSHIP SECTION------ ==== --->

    <div class="membership-section">
        <div class="text-membership">
            <h2>Membership Options</h2>
            <p>
                As an Essential Auction Member, you'll enjoy unrestricted access to our extensive inventory, 
                featuring diverse auction categories beyond just cars. Whether it's wholesale, salvage, or used 
                vehicles, or a wide array of other auction items, we've got you covered. Elevate your experience 
                by upgrading to Basic or Premier Membership, granting you active participation in live auctions 
                across our vast selection. Simplify securing the products you desire with our upgraded memberships!
            </p>
        </div>
    
        <div class="membership-options">
            <div class="membership-option">
                <h4>Guest</h4>
                <h5 class="member-mode">FREE</h5>
                <p>For those who want to look at auctions, but don't want to bid.</p>
                <ul>
                    <li>Pay Annually</li>
                    <li>View an Auction</li>
                    <li>Add bid items to your watchlist</li>
                    <li>Create bids alert</li>
                </ul>
            </div>
        
            <div class="membership-option" id="basic-option">
                <h4>Basic</h4>
                <h5 class="member-mode">NGN 7987</h5>
                <p>For those who plan to buy only a few bid items per year.</p>
                <ul>
                    <li>View multiple online auctions</li>
                    <li>Bid up to one million without making a deposit</li>
                    <li>Bid on up to five bid items at a time with a deposit</li>
                    <li>Save your favorite searches</li>
                </ul>
            </div>
        
            <div class="membership-option">
                <h4>Premier</h4>
                <h5 class="member-mode">NGN 7987</h5>
                <p>For those who plan to buy multiple bid items on a regular basis.</p>
                <ul>
                    <li>Everything included in <strong style="color: #FF5733">Basic</strong></li>
                    <li>Bid on multiple vehicles at the same time up to three million naira daily</li>
                    <li>Get priority in-location assistance</li>
                    <li>Receive priority customer service</li>
                    <li>Receive phone support</li>
                </ul>
            </div>
        </div>
        <div><button class="btn-register" onclick="scrollToSection('register-section')">Register</button></div>


       

     
        
@endsection