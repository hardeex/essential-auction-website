<!--- adding the base layout file -->
@extends('layout.base')

<!--- adding the title tag -->
@section('title', 'Support')


<!---- link to the index.css  file -->
@section('link')
    <link rel="stylesheet" href="/css/support.css">
    <link rel="stylesheet" href="/css/mediaQuerry.css">
@endsection

@section('content')

<div class="support" >
    <h1>Get in Touch</h1>

    <div class="support-container">
        <form class="support-form">
          <div class="form-field">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-field">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-field">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="15"  required></textarea>
          </div>
          <button id="btn-send-msg">Send Message</button>
        </form>
       

        <div class="map">
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2356.5773554738003!2d3.3570968386666062!3d6.61272665791991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.6148826!2d3.3661995!4m5!1s0x103b9380c8d86673%3A0x1271c5c3e42b597b!2s24%20Iyalla%20Street%2C%20Beside%20Ikeja%20City%20Mall%2C%20Alausa%2C%20Lagos%2C%20Alausa%2C%20Ikeja%2C%20Lagos!3m2!1d6.6126726!2d3.3576208999999997!5e0!3m2!1sen!2sng!4v1695412602579!5m2!1sen!2sng"
             width="600" 
             height="550" 
             style="border:0;" 
             allowfullscreen="" 
             loading="lazy" 
             referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>     
    </div>
      
        
</div>
        
@endsection
