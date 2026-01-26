@extends('frontend.layout')

@section('frontend_content')

<!-- banner part -->
    <section id="banner">
        <div class="container">
            <div class="sliders">
                <div class="slides">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/Banner/Image.png') }}" alt="">
                        </div>
                        <div class="col-xl-6 contains">
                            <h4>
                                Welcome to shopery
                            </h4>
                            <h2>
                                Fresh & Healthy
                                Organic Food
                            </h2>
                            <p>
                                Free shipping on all your order. we deliver, you enjoy
                            </p>
                            <a href="#">
                                Show more
                                <span>
                                    <iconify-icon icon="tabler:arrow-right" width="24" height="24"></iconify-icon>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="offer">
                        <h3>
                            70%
                        </h3>
                        <p>
                            OFF
                        </p>
                    </div>
                </div>
                <div class="slides">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/Banner/Image.png') }}" alt="">
                        </div>
                        <div class="col-xl-6 contains">
                            <h4>
                                Welcome to shopery
                            </h4>
                            <h2>
                                Fresh & Healthy
                                Organic Food
                            </h2>
                            <p>
                                Free shipping on all your order. we deliver, you enjoy
                            </p>
                            <a href="#">
                                Show more
                                <span>
                                    <iconify-icon icon="tabler:arrow-right" width="24" height="24"></iconify-icon>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="offer">
                        <h3>
                            70%
                        </h3>
                        <p>
                            OFF
                        </p>
                    </div>
                </div>
                <div class="slides">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/Banner/Image.png') }}" alt="">
                        </div>
                        <div class="col-xl-6 contains">
                            <h4>
                                Welcome to shopery
                            </h4>
                            <h2>
                                Fresh & Healthy
                                Organic Food
                            </h2>
                            <p>
                                Free shipping on all your order. we deliver, you enjoy
                            </p>
                            <a href="#">
                                Show more
                                <span>
                                    <iconify-icon icon="tabler:arrow-right" width="24" height="24"></iconify-icon>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="offer">
                        <h3>
                            70%
                        </h3>
                        <p>
                            OFF
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end -->


    <!-- services part -->
    <section id="more_service">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 service">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/service/delivery-truck 1.png') }}" alt="">
                        <h4>
                            Free Shipping
                        </h4>
                        <p>
                            Free shipping with discount
                        </p>
                    </a>
                </div>
                <div class="col-xl-3 service">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/service/headphones 1.png') }}" alt="">
                        <h4>
                            Great Support 24/7
                        </h4>
                        <p>
                            Instant access to Contact
                        </p>
                    </a>
                </div>
                <div class="col-xl-3 service">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/service/shopping-bag.png') }}" alt="">
                        <h4>
                            100% Sucure Payment
                        </h4>
                        <p>
                            We ensure your money is save
                        </p>
                    </a>
                </div>
                <div class="col-xl-3 service">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/service/package.png') }}" alt="">
                        <h4>
                            Money-Back Guarantee
                        </h4>
                        <p>
                            30 days money-back guarantee
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- service part end -->


    <!-- all products -->
    <section id="all_products">
        <div class="container">
            <div class="heading">
                <h4>
                    Introducing Our Products
                </h4>
            </div>

            <div class="category_changer_btns">
                <button class="category-button" data-filter="All">All</button>
                <button class="category-button" data-filter="Vegetables">Vegetables</button>
                <button class="category-button" data-filter="Fruit">Fruit</button>
                <button class="category-button" data-filter="Meat&Fish">Meat & Fish</button>
                <button class="category-button" data-filter="View_All">View All</button>
            </div>


            <div class="row">

                <div class="single_product_slide col-xl-3 filter Fruit">
                    <div class="img ">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/all product/1 (1).png') }}" alt="">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="details">
                            <h4>
                                Green Apple
                            </h4>
                            <b>
                                $14.99
                            </b>
                            <del>
                                $20.99
                            </del>
                            <div class="star_icon d-flex">
                                <span class="active"><iconify-icon icon="line-md:star-filled" width="13"
                                        height="13"></iconify-icon>
                                </span>
                                <span class="active"><iconify-icon icon="line-md:star-filled" width="13"
                                        height="13"></iconify-icon>
                                </span>
                                <span class="active"><iconify-icon icon="line-md:star-filled" width="13"
                                        height="13"></iconify-icon>
                                </span>
                                <span class="active"><iconify-icon icon="line-md:star-filled" width="13"
                                        height="13"></iconify-icon>
                                </span>
                                <span><iconify-icon icon="line-md:star-filled" width="13" height="13"></iconify-icon>
                                </span>
                            </div>
                        </div>
                        <div class="bag_cart">
                            <span>
                                <iconify-icon icon="heroicons-outline:shopping-bag" width="24"
                                    height="24"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="offer">
                        <p>
                            Sale 50%
                        </p>
                    </div>
                    <div class="other_icons">
                        <ul>
                            <li><a data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left" href="#">
                                    <span>
                                        <iconify-icon icon="ph:heart" width="24" height="24"></iconify-icon>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left" href="#">
                                    <span>
                                        <iconify-icon icon="nimbus:eye" width="24" height="24"></iconify-icon>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>



        </div>
    </section>
    <!-- all product end -->


    <!-- counter part -->
    <section id="count_time" style="background-image: url({{ asset('frontend/assets/images/timer/Best\ Deal.png') }});">
        <div class="container ">
            <div class="heading">
                <h4>
                    BEST DEALS
                </h4>
                <h2>
                    Our Special Products Deal of the Month
                </h2>
            </div>
            <div class="hq-countdown" data-target-date="2026-12-31T23:59:59">
                <div class="hq-countdown-item">
                    <div class="hq-number hq-days">00</div>
                    <div class="hq-label">Days</div>
                </div>
                <div class="hq-countdown-item">
                    <div class="hq-number hq-hours">00</div>
                    <div class="hq-label">Hours</div>
                </div>
                <div class="hq-countdown-item">
                    <div class="hq-number hq-minutes">00</div>
                    <div class="hq-label">Minutes</div>
                </div>
                <div class="hq-countdown-item">
                    <div class="hq-number hq-seconds">00</div>
                    <div class="hq-label">Seconds</div>
                </div>
            </div>
            <div class="shoping_btn">
                <a
                    href="shopping_cart.html">
                    Shop now&nbsp; <span>
                        <iconify-icon icon="lets-icons:arrow-right-light" width="24" height="24"></iconify-icon>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- counter part end -->


    <!--featured product  -->
    <section id="featured_product">
        <div class="container">
            <div class="heading">
                <h4>
                    Featured Products
                </h4>
            </div>
            <div class="product_slider">

                @forelse ($featuredProducts as $product)

                <div class="single_product_slide">
                    <div class="img ">
                        {{-- @foreach ($product->images as $item) --}}

                        <img class="img-fluid" src="{{ asset('storage/productImage/' . $product->images[0]->image) }}" alt="">
                        {{-- @endforeach --}}
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="details">
                            <h4>
                                {{ $product->title }}
                            </h4>
                            <b>
                               {{ $product->discount_price }}
                            </b>
                            <del>
                                {{ $product->price }}
                            </del>
                            <div class="star_icon d-flex">
                                <span><iconify-icon icon="line-md:star-filled" width="12" height="12"></iconify-icon>
                                </span>
                                <span><iconify-icon icon="line-md:star-filled" width="12" height="12"></iconify-icon>
                                </span>
                                <span><iconify-icon icon="line-md:star-filled" width="12" height="12"></iconify-icon>
                                </span>
                                <span><iconify-icon icon="line-md:star-filled" width="12" height="12"></iconify-icon>
                                </span>
                                <span><iconify-icon icon="line-md:star-filled" width="12" height="12"></iconify-icon>
                                </span>
                            </div>
                        </div>
                        <div class="bag_cart">
                            <span>
                                <iconify-icon icon="heroicons-outline:shopping-bag" width="24"
                                    height="24"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="offer">
                        <p>
                            Sale 50%
                        </p>
                    </div>
                    <div class="other_icons">
                        <ul>
                            <li><a data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left" href="#">
                                    <span>
                                        <iconify-icon icon="ph:heart" width="24" height="24"></iconify-icon>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left" href="#">
                                    <span>
                                        <iconify-icon icon="nimbus:eye" width="24" height="24"></iconify-icon>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @empty

                @endforelse


            </div>
        </div>
    </section>
    <!--featured product  -->


    <!-- review -->
    <section id="customer_review">
        <div class="container">
            <div class="heading">
                <h4>
                    What our Clients Says
                </h4>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div class="comment">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/review/Vector.png') }}" alt="">
                        <p>
                            “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                            sagittis diam sit amet
                            ante
                            sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                        </p>
                        <div class="box">

                        </div>
                    </div>
                    <div class="commenter">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/review/Image.png') }}" alt="">
                        <h4>
                            Jenny Willson
                        </h4>
                        <span>
                            customer
                        </span>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="comment">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/review/Vector.png') }}" alt="">
                        <p>
                            “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                            sagittis diam sit amet
                            ante
                            sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                        </p>
                        <div class="box">

                        </div>
                    </div>
                    <div class="commenter">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/review/Image2 (2).png') }}" alt="">
                        <h4>
                            Guy Hawkins
                        </h4>
                        <span>
                            customer
                        </span>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="comment">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/review/Vector.png') }}" alt="">
                        <p>
                            “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                            sagittis diam sit amet
                            ante
                            sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                        </p>
                        <div class="box">

                        </div>
                    </div>
                    <div class="commenter">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/review/Image2 (1).png') }}" alt="">
                        <h4>
                            Kathryn Murphy
                        </h4>
                        <span>
                            customer
                        </span>
                    </div>
                </div>
            </div>
            <div class="video">
                <div class="video_player">
                    <img class="img-fluid d-block" src="{{ asset('frontend/assets/images/video/Image.png') }}" alt="">

                    <div class="humbnail">
                        <h3>
                            video
                        </h3>
                        <h4>
                            We’re the Best Organic Farm in the World
                        </h4>
                        <a class="venobox" data-gall="gall-video" data-autoplay="true" data-vbtype="video"
                            href="https://www.youtube.com/watch?v=TD_N2VR3P1s">
                            <span>
                                <iconify-icon icon="iconamoon:play-circle-thin" width="80" height="80"></iconify-icon>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- review part end -->


    <!-- subscribe part -->
    <section id="subscribe_part">
        <div class="container">
            <hr>
            <div class="subscribe">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-3 logo">
                        <img class="img-fluid d-block" src="{{ asset('frontend/assets/images/Logo (1).png') }}" alt="">
                    </div>
                    <div class="col-xl-4 content">
                        <h4>
                            Subcribe our Newsletter
                        </h4>
                        <p>
                            Pellentesque eu nibh eget mauris congue mattis matti.
                        </p>
                    </div>
                    <div class="col-xl-5 input_email">
                        <input type="email" placeholder="your email address">
                        <button>
                            Search
                        </button>
                    </div>
                </div>
            </div>
            <div class="news">
                <h4>
                    Latest News
                </h4>
                <div class="row justify-content-between">
                    <div class=" news_box">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper/Image.png') }}" alt="">
                        <div class="content">
                            <h4>
                                Curabitur porttitor orci eget neque accumsan venenatis.
                            </h4>
                            <p>
                                Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                                malesuada et pulvinar at, posuere
                                eu neque.
                            </p>
                            <a href="#">
                                Read More &nbsp;
                                <span>
                                    <iconify-icon icon="lets-icons:arrow-right-light" width="24"
                                        height="24"></iconify-icon>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class=" news_box">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper/Image (1).png') }}" alt="">
                        <div class="content">
                            <h4>
                                Curabitur porttitor orci eget neque accumsan venenatis.
                            </h4>
                            <p>
                                Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                                malesuada et pulvinar at,
                                posuere
                                eu neque.
                            </p>
                            <a href="#">
                                Read More &nbsp;
                                <span>
                                    <iconify-icon icon="lets-icons:arrow-right-light" width="24"
                                        height="24"></iconify-icon>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class=" news_box">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper/Frame 206.png') }}" alt="">
                        <div class="content">
                            <h4>
                                Curabitur porttitor orci eget neque accumsan venenatis.
                            </h4>
                            <p>
                                Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                                malesuada et pulvinar at,
                                posuere
                                eu neque.
                            </p>
                            <a href="#">
                                Read More &nbsp;
                                <span>
                                    <iconify-icon icon="lets-icons:arrow-right-light" width="24"
                                        height="24"></iconify-icon>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- subscribe part end -->



@endsection
