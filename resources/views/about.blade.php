<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MINA</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>


    @vite(['resources/js/home.js','resources/css/home.css'])
    @vite(['resources/js/about.js','resources/css/about.css'])
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
            <img src="{{URL::asset('/images/banner_about.png')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title">ABOUT</div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <div class="about_title">
          <h1>
            MINA is a brand born out of love for <br />
            ceramics, vivid colours and passion for <br />
            life.
          </h1>
        </div>
        <div class="about_me">
          <div class="about_item">
            <img src="{{URL::asset('/images/about.jpg')}}" alt="" />
          </div>
          <div class="about_item">
            <div class="about_content">
              <h1>Trung & Thu</h1>
              <p>
                One creative minds that came together at art school, Trung & Thu
                founded MINA with a shared passion for design and
                sustainability. For me, success is more than just about having a
                bestselling product.
              </p>
              <p>
                Every piece in my shop is created with love by Trung & Thu. I draw
                inspiration from the world around me when it comes to shapes,
                colors, and the clay that I work with.
              </p>
              <p>
                Join me in my quest to fill every home with sustainable and
                beautiful décor.
              </p>
            </div>
          </div>
          <div class="about_item">
            <img src="{{URL::asset('/images/about2.png')}}" alt="" />
          </div>
          <div class="about_item">
            <div class="about_content">
              <h1>Sustainability</h1>
              <p>
                Our thoughts about the planet impact everything we do, from the
                clay we use to the packaging we provide. Find out how we stay
                responsible.
              </p>
              <a class="btn2" href="{{ route('shop.index') }}">Read more</a>
            </div>
          </div>
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
    <!-- enđ footer -->



    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
    const avatarMenu = document.querySelector(".menu-avatar");
    const menuLogout = document.querySelector(".menu-logout");
    avatarMenu.onclick = () => {
        menuLogout.classList.toggle("active");
    };
    </script>
</body>

</html>