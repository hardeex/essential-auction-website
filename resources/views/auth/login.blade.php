<!--- adding the base layout file -->
@extends('layout.base')

<!--- adding the title tag -->
@section('title', 'Login')

<!---- link to the index.css  file -->
@section('link')
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/mediaQuerry.css">
@endsection

@section('content')
    <section>
        <div class="login-container">
            <div class="login-form-container">
                        <h2>Login</h2>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div class="sign-up">  <p>Don't have an account? <a href="{{ url('register') }}">Sign up</a></p></div>
                           
                            <input type="submit" value="Login">
                        </form>
            </div>
        </div>
       
    </section>
@endsection

