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
    @vite(['resources/js/shop.js','resources/css/shop.css'])
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
            <img src="{{URL::asset('/images/banner_shop.png')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title">SHOP</div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- start product -->
    <div class="products">
        @foreach($products as $product)
        <div class="product-card">
            <img src="{{URL::asset('public/image/'.$product->photo)}}" />
            <input style="" type="text" class="productid" name="productid" value="{{$product->id}}"/>
            <div style="font-size: 24px;" class="product-name">{{$product->name}}</div>
            <div style="font-size: 18px; margin-bottom: 10px;" class="product-price">$ <span class="price">{{$product->price}}</span></div>
            <button class="btn2" id="btn-order">Buy</button>
        </div>
        @endforeach
    </div>
    <!-- end product -->

    <!-- start cart -->
    <div id="cart" class="cart">
        <div class="close">&#x2715</div>
        <form class="cart_container" method="POST" id="order-receipt" action="{{url('/mathpay/2')}}">
        {{ csrf_field() }}
                <div class="cart-skin ">
                    <div class="cart-title">Product: <span class="skin-name"></span> </div>
                    <div class="cart-skin-info">
                        <img class="cart-img" src="" alt="">
                        <div class="cart-skin-price">2$</div>
                        <div>Enter amount: 
                            <input input name="amountskin" type="text" class="skin-amount" required>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="cart-phone ">
                    <div class="cart-title">Phone *</div>
                    <div class="cart-phone-info">
                        <input style="width: 100%; margin-left: -2px;" name="phone" id="phone-input" cols="30" rows="5" placeholder="Enter phone" required></input style="width: 100%;">
                    </div>
                </div>
                <div class="cart-address ">
                    <div class="cart-title">Address *</div>
                    <div class="cart-address-info">
                        <textarea style="width: 100%;" name="address" id="address-input" cols="30" rows="5" placeholder="Enter address" required></textarea>
                    </div>
                </div>
                <div>* Payment on delivery</div>
                <div class="line"></div>
                <div class="cart-total">
                    <p>Total</p>
                    <div><span id="total"></span> $</div>
                </div>
                <button class="btn2 btn-order-receipt">ORDER</button>
        </form>
    </div>
    <!-- start cart -->

    <div class="form_success">
        <div class="form_success_container">
            <i class="fa fa-times" aria-hidden="true"></i>
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <br>
            <h2>You have made a successful purchase!</h2>
            <p>Orders will be delivered in the next few days</p>
        </div>
    </div>

    <!-- start footer -->
    <div id="footer" class="footer">
        <div class="footer-item">
        <a href="{{ route('home') }}" class="navbar_logo">
            <h3 style="color: #000; font-size: 28px; font-weight: 700;">MINA</h3>
            </a>
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
        const btnOrders = document.querySelectorAll("#btn-order");
        btnOrders.forEach((btn, index) => {
            btn.onclick = (e) => {
                e.preventDefault();
                cart.style.display = "block";
                const card = e.target.closest(".product-card");
                const srcImg = card.querySelector("img").src;
                const cartImg = document.querySelector(".cart-img");
                const nameProduct = card.querySelector(".product-name").innerHTML;
                cart.querySelector(".skin-name").innerHTML = nameProduct;
                cartImg.src = srcImg;

                const idProduct = document.getElementsByClassName("productid")[index].value;
                document.querySelector(
                    "#order-receipt"
                ).action = `http://127.0.0.1:8000/mathpay/${idProduct}`;
            };
        });

        jQuery(document).ready(function() {
            jQuery('.btn-order-receipt').on('submit', function(e) {})
        })

        
        const avatarMenu = document.querySelector(".menu-avatar");
        const menuLogout = document.querySelector(".menu-logout");
        avatarMenu.onclick = () => {
            menuLogout.classList.toggle("active");
        };
    </script>

</body>

</html>