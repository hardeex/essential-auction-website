<!--- adding the base layout file -->
@extends('dashboard.base-dashboard')

<!--- adding the title tag -->
@section('title', 'User Dashboard')


<!---- link to the index.css  file -->
@section('link')
    <link rel="stylesheet" href="/css/dashboard/user-dashboard.css">
    <link rel="stylesheet" href="/css/mediaQuerry.css">
@endsection

@section('content')

<div class="dashboard-container" >
    <div class="left-content">
        <!-- Content on the left side of the page -->
        <div class="dashboard-header">
            <img src="/img/bld.jpg" alt="">
            <div id="txt-dasboard">
                <p>Dashboard</p>
            </div>    
        </div>

        <div>
            <a href="">Profile</a> <hr>
            <a href="">Auction Listing</a>
            <a href="">Bidding Interface</a>
            <a href="">Messaging & Supports</a>
        </div>
    </div>

    <div class="middle-aside">
        <!-- Aside text in the middle of the page -->
       <h2>
            contents for each view will be displayed from the database
       </h2>
    </div>
</div>
@endsection
