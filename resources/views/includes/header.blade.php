<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kommute | Kenyas Paperless Car Financing</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/10d0e33dd4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>


        <nav class="navbar fixed-top navbar-expand-lg pt-4">
            <div class="container">

                <a class="navbar-brand" href="/">
                    <img src="../images/logo.jpg" class="logo" alt="kommute-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/products') }}" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/cars') }}" class="nav-link">Cars</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/about') }}" class="nav-link">About Us</a>
                        </li>
                        <li class="login-btn">
                            <a href="{{ url('/login') }}" class="btn btn-lg font-weight-bold">Login</a>
                        </li>
                        <li class="signup-btn">
                            <a href="#" class="btn btn-lg font-weight-bold"><i class="fas fa-phone"></i>  0768825914 / 0790363195</a>
                        </li>
                    </ul>
                </div>
                <router-view></router-view>
            </div>
        </nav>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60ddc1857f4b000ac03a88bd/1f9h3nsog';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4COGpamoFVy38MVBnEIbbVYUewOrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>
    </body>
</html>
