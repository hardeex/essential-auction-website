<!--- adding the base layout file -->
@extends('layout.base')

<!--- adding the title tag -->
@section('title', 'Register')

<!---- link to the index.css  file -->
@section('link')
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="/css/mediaQuerry.css">
@endsection


@section('content')
    <section>
        <div class="register-form-container">
            <h2>Register</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
        
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
        
                <div class="form-group">
                <label for="membership-option">Select Membership Option:</label>
                <select id="membership-option" name="membership-option">
                    <option value="basic">Basic</option>
                    <option value="guest">Guest</option>
                    <option value="premier">Premier</option>
                </select>
                </div>
        
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
        
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" required>
                </div>
        
                <div class="form-group" id="terms-and-condition">
                    <input type="checkbox" id="terms_conditions" name="terms_conditions" required>
                    <label for="terms_conditions" id="terms_and_conditions_label">I have read and fully agree with Essential Auction Terms & Conditions</label>
                </div>
                  
                <div class="form-group">
                    <button type="submit" class="btn-primary">Submit</button>
                </div>
            </form>
        </div>
        
    </section>
    
@endsection