<!--- adding the base layout file -->
@extends('layout.base')

<!--- adding the title tag -->
@section('title', 'Home')


<!---- link to the index.css  file -->
@section('link')
    <link rel="stylesheet" href="/css/saleForm.css">
    <link rel="stylesheet" href="/css/mediaQuerry.css">
@endsection

@section('content')

<div class="sales-form-container">
    <div class="sales-form">
        <h1>SELL A PROPERTY BY AUCTION WITH ESSENTIAL NIGERIA</h1>
        <p>If you're considering selling your property at auction or have any inquiries about the auction process, 
            we invite you to reach out to us. You can contact us at 0814 8141 3982, and our team of experts will be 
            happy to assist you. Alternatively, you can also complete the online form below to receive a complimentary, 
            unbiased appraisal of your property. We look forward to helping you make informed decisions about your property sale.
        </p>
        <form action="#" method="post">
            <label for="title">Title:</label>
            <select id="title" name="title">
                <option value="mr">Mr</option>
                <option value="mrs">Mrs</option>
                <option value="miss">Miss</option>
                <option value="ms">Ms</option>
                <option value="dr">Dr</option>
                <option value="mr-mrs">Mr & Mrs</option>
                <option value="others">Others</option>
            </select>
            
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber">
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            
            <label for="propertyAddress">Property Address:</label>
            <input type="text" id="propertyAddress" name="propertyAddress">
            
            <label for="lowestPriceRange">Lowest Price:</label>
            <input type="number" id="priceRange" name="lowestPriceRange">

            <label for="highestPriceRange">Highest Price:</label>
            <input type="number" id="priceRange" name="highestPriceRange">
            
            <button type="submit" id="btn-property">Submit</button>
        </form>
    </div>
</div>
@endsection