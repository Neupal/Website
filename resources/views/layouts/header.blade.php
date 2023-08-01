<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('VentureWeb/Homepage.css')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel='stylesheet' href='resources\views\homepage.css'>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    

    
</head>

<body>
    <section class="navbar__section">
        <a href="Homepage.html">
            <div class="nav__logo">
                <div class="logo"><img src="{{asset('VentureWeb\logo.jpg')}}" alt=""></div>
                <div class="logo__text">
                 
                        <span style="color:red">VENTURE </span>
                        <br><span style="color:rgb(63,155,214)">FOUR</span>
                    
                </div>
            </div>
        </a>
        <div class="nav__toogle" id="navToggle">
            <i class="fa-sharp fa-solid fa-bars"></i>
        </div>

        <div class="nav__elements">
            <ul>
                <li class="nav__element">
                    <a href="{{url('/home')}}">HOME</a>
                </li>
                <li class="nav__element">
                    <a href="{{url('/about')}}">ABOUT </a>
                </li>
                <li class="nav__element">
                    <a href="{{url('/services')}}">SERVICES</a>
                </li>
                <li class="nav__element">
                    <a href="#">PRODUCTS</a>
                </li>
                <li class="nav__element">
                    <a href="#">CAREERS</a>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>