<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecobazar</title>

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/plant 1.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- css part -->
    {{-- @stack('backend_css') --}}


    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/js/iconify-icon.min.js') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- css part end -->


</head>

<body>

    <!-- header part -->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="heading_one_content">
                        <span>
                            <iconify-icon icon="mingcute:location-line" width="24" height="24"></iconify-icon>
                        </span>
                        <p>
                            Store Location: Lincoln- 344, Illinois, Chicago, USA
                        </p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class=" d-flex justify-content-end align-items-center heading_one_content_two">
                        <select name="" id="">
                            <option value="">ENG</option>
                            <option value="">BN</option>
                        </select>
                        <select name="" id="">
                            <option value="">USD</option>
                            <option value="">BD</option>
                        </select>
                        <span>|</span>
                        <div class="sign_in">
                            <a href="{{ route('login') }}">
                                sign in
                            </a>&nbsp;/&nbsp;

                            <a href="{{ route('register') }}">sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header part end -->


    <!-- navbar part_1 -->
    <section id="navbar">
        <div class="container">
            <div class="row ">
                <div class="col-xl-3">
                    <a href="{{ route('frontend.featured') }}">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/Logo (1).png') }}" alt="">
                    </a>
                </div>
                <div class="d-none d-xl-block col-xl-5 search_bar">
                    <form action="" method="">
                        <input type="text" placeholder="search">
                        <span>
                            <iconify-icon icon="lucide:search" width="24" height="24"></iconify-icon>
                        </span>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="d-none d-xl-flex col-xl-3 icon_contain">
                    <div class="icons">
                        <div>
                            <span class="first_icon">
                                <iconify-icon icon="solar:heart-outline" width="32" height="32"></iconify-icon>
                            </span>
                        </div>
                        <div class="line"></div>
                        <div class="count">
                            <span class="second_icon">
                                <iconify-icon icon="heroicons:shopping-bag" width="32"
                                    height="32"></iconify-icon>
                            </span>
                            <span class="number">2</span>
                        </div>
                    </div>
                    <div class="contain">
                        <p>
                            Shopping cart:
                        </p>
                        <b>
                            $57.00
                        </b>
                    </div>
                </div>
            </div>
            <span class="d-xl-none d-lg-block mobile_menu" data-bs-toggle="offcanvas" href="#offcanvasExample"
                role="button" aria-controls="offcanvasExample">
                <iconify-icon icon="icon-park-outline:hamburger-button" width="30" height="30"></iconify-icon>
            </span>
        </div>
    </section>
    <!-- navbar part_1 end -->


    <!-- offcanvas  -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a href="#">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/Logo (1).png') }}" alt="">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="parent">
                <li>
                    <a class="btn " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Home
                        <span class=""><iconify-icon icon="octicon:plus-16" width="16"
                                height="16"></iconify-icon></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li>
                    <a class="btn " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Shop
                        <span class=""><iconify-icon icon="octicon:plus-16" width="16"
                                height="16"></iconify-icon></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li>
                    <a class="btn " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pages
                        <span class=""><iconify-icon icon="octicon:plus-16" width="16"
                                height="16"></iconify-icon></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li>
                    <a class="btn " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Blog
                        <span class=""><iconify-icon icon="octicon:plus-16" width="16"
                                height="16"></iconify-icon></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="without_dropdown">
                    <a href="#">About Us
                    </a>
                </li>
                <li class="without_dropdown">
                    <a href="#">Contact us
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- offcanvas end -->


    <!-- navbar part_2 -->
    <nav id="navBar" class="d-none d-xl-block">
        <div class="container">
            <div class="row">
                <div class="dropdown first_button">
                    <button class="btn " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="pe-2"><iconify-icon icon="icon-park-outline:hamburger-button" width="20"
                                height="20"></iconify-icon></span>
                        All Categories
                        <span class="ps-2"><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                height="24"></iconify-icon></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @forelse ($categories as $category)

                        <li><a class="dropdown-item" href="#">{{ $category->title }}</a></li>
                        @empty
                        <li><p class="text-danger mb-0">No Category found!</p></li>

                        @endforelse
                    </ul>
                </div>
                <div class="dropdown other_buttons home">
                    <a class="btn " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Home
                        <span class=""><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                height="24"></iconify-icon></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown other_buttons">
                    <a class="btn " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Shop
                        <span class=""><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                height="24"></iconify-icon></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown other_buttons">
                    <a class="btn " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pages
                        <span class=""><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                height="24"></iconify-icon></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown other_buttons">
                    <a class="btn " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Blog
                        <span class=""><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                height="24"></iconify-icon></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="other_buttons px-2">
                    <a href="#">About Us
                    </a>
                </div>
                <div class="other_buttons px-3">
                    <a href="#">Contact us
                    </a>
                </div>
            </div>
            <div class="whatsapp_number">
                <span>
                    <iconify-icon icon="lucide:phone-call" width="24" height="24"></iconify-icon>
                </span>
                <p>
                    (219) 555-0114
                </p>
            </div>
        </div>
    </nav>
    <!-- navbar part_2 end -->



    <!-- mobile_footer -->
    <section id="mobile_footer" class="d-xl-none">
        <div class=" row">
            <div class="col-2">
                <a href="#">
                    <span>
                        <iconify-icon icon="ic:round-home" width="24" height="24"></iconify-icon>
                    </span>
                    <p>
                        Home
                    </p>
                </a>
            </div>
            <div class="col-2">
                <a href="#">
                    <span>
                        <iconify-icon icon="ph:bag-fill" width="24" height="24"></iconify-icon>
                    </span>
                    <p>
                        Offer
                    </p>
                </a>
            </div>
            <div class="col-2 ">
                <a href="#" class="search_icon">
                    <span>
                        <iconify-icon icon="ic:twotone-search" width="24" height="24"></iconify-icon>
                    </span>
                    <p>
                        Search
                    </p>
                </a>
            </div>
            <div class="col-2">
                <a href="#">
                    <span>
                        <iconify-icon icon="codicon:account" width="24" height="24"></iconify-icon>
                    </span>
                    <p>
                        Account
                    </p>
                </a>
            </div>
            <div class="col-2">
                <a href="#">
                    <span>
                        <iconify-icon icon="famicons:cart" width="24" height="24"></iconify-icon>
                    </span>
                    <p>
                        Cart
                    </p>
                </a>
            </div>
        </div>
    </section>
    <!-- mobile_footer -->


    <!-- search body -->
    <div id="search" class="d-xl-none">
        <div class="container">
            <form action="">
                <input type="search" placeholder="search">
                <button type="submit">
                    <iconify-icon icon="ic:twotone-search" width="30" height="30"></iconify-icon>
                </button>
            </form>
        </div>
        <span class="search_body_cross_button">
            <iconify-icon icon="maki:cross" width="24" height="24"></iconify-icon>
        </span>
    </div>
    <!-- search body end -->

    @yield('frontend_content')

    @php
        $totalQty = 0;
    @endphp

    @foreach (session('cart', []) as $productQty)
        @php
            $totalQty = $totalQty + $productQty['quantity'];

        @endphp
    @endforeach

    <button type="button" class="btn btn-primary position-relative add_to_icon" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <iconify-icon icon="iconoir:add-to-cart" width="35" height="35"></iconify-icon>

        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ $totalQty }}
            <span class="visually-hidden">unread messages</span>
        </span>
    </button>



    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h2 id="offcanvasRightLabel" style="color: #00b207">EcoBazar</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ">

            @forelse (session('cart' , []) as $key => $item)
                <div class="row mb-2 shadow-sm">
                    <div class="col-xl-3">
                        <img class="img-fluid" src="{{ asset('storage/productimage/' . $item['image']) }}"
                            alt="">
                    </div>
                    <div class="col-xl-7">
                        <strong>{{ $item['title'] }}</strong>
                        <p class="mb-0">Qty:&nbsp;{{ $item['quantity'] }}</p>
                        <p class="mb-0">Price:&nbsp;{{ $item['price'] }} * {{ $item['quantity'] }} =
                            {{ $item['price'] * $item['quantity'] }}tk</p>
                    </div>
                    <div class="col-xl-2 d-flex justify-content-center align-items-center ">
                        <a href="{{ route('frontend.deletCart', $key) }}"
                            class="d-flex justify-content-center align-items-center"><iconify-icon
                                icon="emojione-v1:cross-mark" width="28" height="28"></iconify-icon></a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        @if (isset( $item))

        <div class="d-flex justify-content-center align-items-center my-3 ">
            <a href="{{ route('frontend.checkoutCart') }}" class="btn-outline-hover"
                style="width: 95%; background:#00b207; padding:10px 0; color:white; display:flex; justify-content:center; align-items:center; border-radius:10px">Checkout</a>
        </div>
        @else
        <div class="d-flex justify-content-center align-items-center my-3 ">
            <a href="" class="bg-danger"
                style="width: 95%;  padding:10px 0; color:white; display:flex; justify-content:center; align-items:center; border-radius:10px">Nothing to checkout</a>
        </div>
        @endif

    </div>

    <!-- footer part -->
    <section id="footer">
        <img class="left_side img-fluid d-none d-xl-block"
            src="{{ asset('frontend/assets/images/footer/Left.png') }}" alt="">
        <img class="right_side img-fluid d-none d-xl-block "
            src="{{ asset('frontend/assets/images/footer/Right.png') }}" alt="">
        <div class="container">
            <div class="main_part ">
                <div class="row ">
                    <div class="col-xl-3 about_part">
                        <h4>
                            About Shopery
                        </h4>
                        <p>
                            Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna
                            congue nec.
                        </p>
                        <a href="#">
                            <span>
                                <b>(219) 555-0114</b>
                            </span>
                        </a>
                        <span class="or">
                            or
                        </span>
                        <a href="#">
                            <span>Proxy@gmail.com</span>
                        </a>
                    </div>
                    <div class="col-xl-5 links_part">
                        <div class="row">
                            <div class="col-xl-4 ">
                                <h4>
                                    My Account
                                </h4>
                                <ul>
                                    <li><a href="#">
                                            My Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Order History
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Shoping Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Settings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-4 ">
                                <h4>
                                    Helps
                                </h4>
                                <ul>
                                    <li><a href="#">
                                            Contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Faqs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Terms & Condition
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Privacy Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-4 ">
                                <h4>
                                    Proxy
                                </h4>
                                <ul>
                                    <li><a href="#">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Shop
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Product
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Products Details
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Track Order
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 picture_part">
                        <h4>
                            Instagram
                        </h4>
                        <div class="row images">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/instagram picture/Image.png') }}"
                                alt="">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/instagram picture/Image (1).png') }}"
                                alt="">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/instagram picture/Image (2).png') }}"
                                alt="">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/instagram picture/Image (3).png') }}"
                                alt="">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/instagram picture/Image (4).png') }}"
                                alt="">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/instagram picture/Image (5).png') }}"
                                alt="">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/instagram picture/Image (6).png') }}"
                                alt="">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/instagram picture/Image (7).png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="socail_media_part">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-3 social_icons">
                        <span class="ms-0">
                            <a href="#">
                                <iconify-icon icon="flowbite:facebook-solid" width="24"
                                    height="24"></iconify-icon>
                            </a>
                        </span>
                        <span>
                            <a href="#">
                                <iconify-icon icon="flowbite:twitter-solid" width="24"
                                    height="24"></iconify-icon>
                            </a>
                        </span>
                        <span>
                            <a href="#">
                                <iconify-icon icon="nrk:some-pinterest" width="24" height="24"></iconify-icon>
                            </a>
                        </span>
                        <span>
                            <a href="#">
                                <iconify-icon icon="mdi:instagram" width="24" height="24"></iconify-icon>
                            </a>
                        </span>
                    </div>
                    <div class="col-xl-4 copy_write">
                        <p>
                            Shopery eCommerce © 2021. All Rights Reserved
                        </p>
                    </div>
                    <div class="col-xl-4 payment_methods ">
                        <div class="row justify-content-between">
                            <span>
                                <a href="#">
                                    <img class="img-fluid "
                                        src="{{ asset('frontend/assets/images/payment/ApplePay.png') }}"
                                        alt="">
                                </a>
                            </span>
                            <span>
                                <a href="#">
                                    <img class="img-fluid"
                                        src="{{ asset('frontend/assets/images/payment/Mastercard.png') }}"
                                        alt="">
                                </a>
                            </span>
                            <span>
                                <a href="#">
                                    <img class="img-fluid"
                                        src="{{ asset('frontend/assets/images/payment/Discover.png') }}"
                                        alt="">
                                </a>
                            </span>
                            <span>
                                <a href="#">
                                    <img class="img-fluid"
                                        src="{{ asset('frontend/assets/images/payment/visa-logo.png') }}"
                                        alt="">
                                </a>
                            </span>
                            <span>
                                <a class="secure_payment" href="#">
                                    <div>
                                        <span>
                                            <iconify-icon icon="prime:lock" width="24"
                                                height="24"></iconify-icon>
                                        </span>
                                        <span>Secure</span>
                                    </div>
                                    <p>Payment</p>
                                </a>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->




    <!-- js part -->

    @stack('frontend_js')

    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>

    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>

    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/category-filter.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/hq-countdown-timer.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/venobox.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>

</body>

</html>
