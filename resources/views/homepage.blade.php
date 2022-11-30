<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MINA</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    
    @vite(['resources/js/home.js','resources/css/home.css'])

</head>

<body>
    <!-- start navbar -->
    <nav class="navbar" id="navbar">
        <div class="navbar_container">
            <a href="{{ route('home') }}" class="navbar_logo">
                <h3 style="color: #000; font-size: 28px; font-weight: 700;">MINA</h3>
            </a>
            <ul class="navbar_menu">
                <li class="menu-item menu-dichvu">
                       <a href="{{ route('shop.index') }}">Shop</a>
                </li>
                <li class="menu-item"><a href="{{ route('about') }}">About</a></li>
                <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
                <li>

                    <div class="menu-avatar">
                        <div class="avatar"><img src="{{URL::asset('/images/avatar-login.png')}}" alt=""></div>
                        <a href="{{ route('login') }}" class="menu-logout">
                            Log out
                        </a>
                    </div>
                </li>
            </ul>
            <div class="navbar-toggle">
                <div class="toggle-item"></div>
                <div class="toggle-item"></div>
                <div class="toggle-item"></div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start banner -->
    <div class="banner">
        <div class="banner_container">
            <img src="{{URL::asset('/images/bannerhome.jpg')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title" style="font-size: 86px">Handmade ceramics</div>
                <p style="font-size: 18px; margin-bottom: 50px;">Painted clay ceramics made with love.</p>
                <a class="btn" href="{{ route('shop.index') }}">SHOP NOW</a>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- start service -->
    <div class="service" id="service"  style="padding-bottom: 50px;">
        <div class="service_title">Our bestsellers</div>
        <div class="service_container">
            <div class="service-item">
                <img src="{{URL::asset('/images/sp15.png')}}" alt="" />
                <span style="font-size: 24px; font-weight: 500;"> 'Candy' Flowerpot</span>
                <h4 style="font-size: 18px; margin-bottom: 50px;">$59.99</h4>
            </div>
            <div class="service-item">
                <img src="{{URL::asset('/images/sp8.png')}}" alt="" />
                <span style="font-size: 24px; font-weight: 500;">'Drop' Vase</span>
                <h4 style="font-size: 18px; margin-bottom: 50px;">$39.99</h4>
                <a class="btn2" href="{{ route('shop.index') }}">SHOP NOW</a>
            </div>
            <div class="service-item">
                <img src="{{URL::asset('/images/sp12.png')}}" alt="" />
                <span style="font-size: 24px; font-weight: 500;">'Wave' Vase</span>
                <h4 style="font-size: 18px; margin-bottom: 50px;">$69.99</h4>
            </div>
        </div>

        <div class="banner" style="margin-top: 150px;">
            <div class="banner_container">
                <img src="{{URL::asset('/images/bannerhome1.png')}}" alt="" />
                <div class="banner-content">
                    <div class="banner-title" style="font-size: 86px">Home decor items</div>
                    <p style="font-size: 18px; margin-bottom: 50px;">Find your new favorite pieces.</p>
                    <a class="btn" href="{{ route('shop.index') }}">SHOP NOW</a>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end service -->
    <div class="home_about" style="margin-top: 10px; margin-bottom: 150px;">
        <div class="home_about-item">
          <img src="{{URL::asset('/images/homeab.png')}}" alt="" />
          <h1>About MINA</h1>
          <p style="margin: -15px 0 30px 0;">MINA is a brand born out of a passion for ceramics.</p>
          <a class="btn2" href="{{ route('shop.index') }}">Learn more</a>
        </div>
        <div class="home_about-item">
          <img src="{{URL::asset('/images/homeab1.png')}}" alt="" />
          <h1>Sustainability</h1>
          <p style="margin: -15px 0 30px 0;">MINA is an eco-friendly brand that cares about sustainability.</p>
          <a class="btn2" href="{{ route('shop.index') }}">Learn more</a>

        </div>
    </div>
    <div class="banner">
        <div class="banner_container">
            <img src="{{URL::asset('/images/homeemail.png')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title" style="font-size: 86px">Sign-up for our newsletter</div>
                <input type="text" style="width: 500px;height: 50px; border-radius: 0; margin-bottom: 50px; opacity: 0.8;" placeholder="Your email address">
                <br>
                <a class="btn" href="#">SUBMIT</a>
            </div>
        </div>
    </div>


    <div class="follow_us" style="padding-bottom: 150px;">
        <div class="title" style="padding-top: 100px; font-size: 48px; font-weight: 500;">Follow us on Facebook</div>
        <div class="follow_container">
            <img src="{{URL::asset('/images/ct1.jpg')}}" alt="" />
            <img src="{{URL::asset('/images/ct3.png')}}" alt="" />
            <img src="{{URL::asset('/images/ct2.jpg')}}" alt="" />
        </div>
        <a href="https://www.facebook.com/trunghips.0902" class="btn2">@Trung_Thu</a>
    </div>

    <!-- start footer -->
    <div id="footer" class="footer">
        <div class="footer-item">
            <h3>MINA</h3>
        </div>

        <div class="footer-item">
            <a href="{{ route('shop.index') }}">Shop</a><br />
            <a href="{{ route('about') }}">About</a><br />
            <a href="{{ route('contact') }}">Contact</a><br />
        </div>
        <div class="footer-item">
            <p>Email: mina0902@gmail.com</p>
            <p>Phone: 0332631117</p>
            <div class="icon">
                <a href="https://www.facebook.com/trunghips.0902"><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- end footer -->
    <script>
        const avatarMenu = document.querySelector(".menu-avatar");
        const menuLogout = document.querySelector(".menu-logout");
        avatarMenu.onclick = () => {
            menuLogout.classList.toggle("active");
        };
    </script>
</body>

</html>