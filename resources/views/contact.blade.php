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
    @vite(['resources/js/contact.js','resources/css/contact.css'])
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
            <img src="{{URL::asset('/images/banner_contact.png')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title">CONTACT</div>
            </div>
        </div>
    </div>
    <!-- end banner -->


    <div class="contact_content">
          <div class="contact_address">
            <div class="contact_address_item">
              <h1>Headquarters</h1>
              <p>The TShop Studio</p>
              <p>Tu Ky,</p>
              <p>Hai Duong,</p>
              <p>VietNam</p>
            </div>
            <div class="contact_address_item">
              <h1>Collaborations</h1>
              <p>
                Reach out to collaborate at <br />
                mina0902@gmail.com
              </p>
            </div>
          </div>
          <form class="contact_form">
            <h1>Inpuiries</h1>
            <div class="form_input">
              <p>Name*</p>
              <input required type="text" placeholder="Your name" />
            </div>
            <div class="form_input">
              <p>Last name</p>
              <input required type="text" placeholder="Your last name" />
            </div>
            <div class="form_input">
              <p>Your email*</p>
              <input required type="text" placeholder="Your email address" />
            </div>
            <div class="form_input">
              <p>Message*</p>
              <input required type="text" placeholder="Enter your message" />
            </div>
            <button class="btn2">Submit</button>
          </form>
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