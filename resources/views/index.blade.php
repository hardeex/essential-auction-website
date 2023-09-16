<!--- adding the base layout file -->
@extends('layout.base')

<!--- adding the title tag -->
@section('title', 'Home')


<!---- link to the index.css  file -->
@section('link')
        <link rel="stylesheet" href="/css/index.css">
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

    
   

    
           
        
            
    
    
@endsection