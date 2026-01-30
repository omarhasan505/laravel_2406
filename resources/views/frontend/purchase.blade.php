@extends('frontend.layout')

@section('frontend_content')

 <!-- product details -->
    <section id="product_details">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 ">
                    <div class="row align-items-center">
                        <div class="col-lg-4 order-1 order-lg-0 slider-nav">

                            @foreach ($featuredProducts->images as $image )


                            <div class="img">
                                <img class="img-fluid" src="{{ asset('storage/productImage/' . $image->image) }}" alt="">
                            </div>
                            @endforeach

                        </div>

                        <div class="col-lg-8 order-0 order-lg-1 slider-for">

                            <div class="img">
                                <img class="img-fluid example" src="{{ asset('storage/productImage/' . $image->image) }}" alt="">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-6 purchase_product">


                    <div class="top_part">
                        <div class="heading d-flex align-items-center">
                            <h4>
                                {{ $featuredProducts->title }}
                            </h4>
                            <span>
                                {{ $featuredProducts->stock }}
                            </span>
                        </div>
                        <div class="review d-flex align-items-center">
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
                                <span>
                                    4 Review
                                </span>

                            </div>

                            <div class="div">
                                <b>
                                    SKU:
                                </b>
                                <span>
                                    2,51,594
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center price_tag">
                            <del>
                               {{ $featuredProducts->price }}Tk
                            </del>
                            &nbsp;
                            <b>

                                <span class="discounted_price">
                                   {{ $featuredProducts->discount_price }}
                                </span>
                            </b>
                            <span class="discount">
                                64% Off
                            </span>
                        </div>
                    </div>


                    <div class="middle_part">
                        <div class="social_media_link d-flex justify-content-between align-items-center">
                            <div class="brand_img d-flex align-items-center">
                                <p class="mb-0">
                                    Brand:
                                </p>
                                <img class="img-fluid ms-2" src="./assets/images/brand.png" alt="">
                            </div>
                            <div class="social_icons d-flex align-items-center">
                                <p class="mb-0">
                                    Share item :
                                </p>
                                <span>
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
                        </div>
                        <p>
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Nulla nibh diam, blandit vel
                            consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.
                        </p>
                    </div>

                    <div class="third_part">
                        <div class="row justify-content-between">
                            <div class="counter d-flex align-items-center justify-content-center col-xl-3 ">
                                <button class="increment">
                                    <iconify-icon icon="ic:twotone-plus" width="24" height="24"></iconify-icon>
                                </button>
                                <input class="product_counter" type="text" value="1">
                                <button class="decrement">
                                    <iconify-icon icon="ic:sharp-minus" width="24" height="24"></iconify-icon>
                                </button>
                            </div>
                            <div class="add_cart col-xl-7 d-flex align-items-center justify-content-center">
                                <a href="{{ route('frontend.addToCart' , $featuredProducts->id) }}">

                                    Add to Cart
                                    <span>
                                        <iconify-icon icon="akar-icons:shopping-bag" width="24"
                                            height="24"></iconify-icon>
                                    </span>
                                </a>
                            </div>
                            <div class="favourite_icon col-xl-1">
                                <span>
                                    <iconify-icon icon="mynaui:heart" width="24" height="24"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="last_part">
                        <p>
                            <b>Category: &nbsp;</b>
                            Vegetables
                        </p>
                        <p>
                            <b>
                                Tag:
                            </b>
                            <a href="#">
                                Vegetables
                            </a><a href="#">
                                Healthy
                            </a><a href="#">
                                Chinese
                            </a><a href="#">
                                Cabbage
                            </a><a href="#">
                                Green Cabbage
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <span class="cross_icon">
                <iconify-icon icon="system-uicons:cross" width="32" height="32"></iconify-icon>
            </span> -->
        </div>
    </section>
    <!-- product details -->

    <!-- description part -->
    <section id="description">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">
                        Descriptions
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Additional
                        Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">Customer
                        Feedback</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row justify-content-between">
                        <div class="col-xl-6">
                            <div class="row">
                                <ul class="first_list col-xl-3">
                                    <li>Weight:</li>
                                    <li>Color:</li>
                                    <li>Type:</li>
                                    <li>Category:</li>
                                    <li>Stock Status:</li>
                                    <li>Tags:</li>
                                </ul>
                                <ul class="second_list col-xl-9">
                                    <li>03</li>
                                    <li>Green</li>
                                    <li>Organic</li>
                                    <li>Vegetables</li>
                                    <li>Available (5,413)</li>
                                    <li>
                                        <a href="#">
                                            Vegetables
                                        </a><a href="#">
                                            Healthy
                                        </a><a href="#">
                                            Chinese
                                        </a><a href="#">
                                            Cabbage
                                        </a><a href="#">
                                            Green Cabbage
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="description_video">
                                <img class="img-fluid d-block" src="{{ asset('frontend/assets/images/description/Image.png') }}" alt="">
                                <span>
                                    <iconify-icon icon="heroicons:play-16-solid" width="16" height="16"></iconify-icon>
                                </span>
                            </div>
                            <div class="more">
                                <div class="row justify-content-between">
                                    <div class="col-xl-6 p-0 row">
                                        <div class="col-xl-2">
                                            <span>
                                                <iconify-icon icon="ic:outline-discount" width="24"
                                                    height="24"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="col-xl-10 p-0">
                                            <h4>
                                                64% Discount
                                            </h4>
                                            <p>
                                                Save your 64% money with us
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 p-0 row">
                                        <div class="col-xl-2">
                                            <span>
                                                <iconify-icon icon="bi:leaf" width="24" height="24"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="col-xl-10 p-0">
                                            <h4>
                                                100% Organic
                                            </h4>
                                            <p>
                                                100% Organic Vegetables
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 describe">
                            <p>
                                Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at
                                mauris. Maecenas
                                tincidunt
                                ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi
                                porttitor vel. Etiam tincidunt
                                metus
                                vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam
                                mollis lacus. Sed et
                                condimentum
                                arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi
                                urna ipsum, placerat
                                quis
                                commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam.
                                Phasellus nec fringilla
                                elit.

                                Nulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus
                                faucibus elementum tincidunt,
                                turpis
                                mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum
                                neque et pharetra.
                            </p>
                            <p>
                                <span>
                                    <iconify-icon icon="el:ok-sign" width="15" height="15"></iconify-icon>
                                </span>
                                100 g of fresh leaves provides.
                            </p>
                            <p>
                                <span>
                                    <iconify-icon icon="el:ok-sign" width="15" height="15"></iconify-icon>
                                </span>
                                Aliquam ac est at augue volutpat elementum.
                            </p>
                            <p>
                                <span>
                                    <iconify-icon icon="el:ok-sign" width="15" height="15"></iconify-icon>
                                </span>
                                Quisque nec enim eget sapien molestie.
                            </p>
                            <p>
                                <span>
                                    <iconify-icon icon="el:ok-sign" width="15" height="15"></iconify-icon>
                                </span>
                                Proin convallis odio volutpat finibus posuere.
                            </p>
                            <p>
                                Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non
                                turpis lobortis iaculis at ut
                                massa.
                            </p>
                        </div>
                        <div class="col-xl-5">
                            <div class="description_video">
                                <img class="img-fluid d-block" src="./assets/images/description/Image.png" alt="">
                                <span>
                                    <iconify-icon icon="heroicons:play-16-solid" width="16" height="16"></iconify-icon>
                                </span>
                            </div>
                            <div class="more">
                                <div class="row justify-content-between">
                                    <div class="col-xl-6 p-0 row">
                                        <div class="col-xl-2">
                                            <span>
                                                <iconify-icon icon="ic:outline-discount" width="24"
                                                    height="24"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="col-xl-10 p-0">
                                            <h4>
                                                64% Discount
                                            </h4>
                                            <p>
                                                Save your 64% money with us
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 p-0 row">
                                        <div class="col-xl-2">
                                            <span>
                                                <iconify-icon icon="bi:leaf" width="24" height="24"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="col-xl-10 p-0">
                                            <h4>
                                                100% Organic
                                            </h4>
                                            <p>
                                                100% Organic Vegetables
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    </section>
    <!-- description part end -->


    <!-- related product -->
        <section id="featured_product">
            <div class="container">
                <div class="heading">
                    <h4>
                      Related Product
                    </h4>
                </div>
                <div class="product_slider">

                    {{-- <div class="single_product_slide">
                        <div class="img ">
                            <img class="img-fluid" src="./assets/images/related product/green apple.png" alt="">
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
                                    <iconify-icon icon="heroicons-outline:shopping-bag" width="24" height="24"></iconify-icon>
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
                    </div> --}}

                     @forelse ($categories as $category)
                     @foreach ($category->products as $product )
                    <div class="single_product_slide">
                        <div class="img ">
                            {{-- @foreach ($product->images as $item) --}}

                            <img class="img-fluid"
                                src="{{ asset('storage/productImage/' . $product->images[0]->image) }}" alt="">
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
                                    <span><iconify-icon icon="line-md:star-filled" width="12"
                                            height="12"></iconify-icon>
                                    </span>
                                    <span><iconify-icon icon="line-md:star-filled" width="12"
                                            height="12"></iconify-icon>
                                    </span>
                                    <span><iconify-icon icon="line-md:star-filled" width="12"
                                            height="12"></iconify-icon>
                                    </span>
                                    <span><iconify-icon icon="line-md:star-filled" width="12"
                                            height="12"></iconify-icon>
                                    </span>
                                    <span><iconify-icon icon="line-md:star-filled" width="12"
                                            height="12"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                            <div class="bag_cart">
                                <a href="{{ route('frontend.addToCart', $product->id) }}">
                                    <iconify-icon icon="heroicons-outline:shopping-bag" width="24"
                                        height="24"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="offer">
                            <p>
                                Sale 50%
                            </p>
                        </div>
                        <div class="other_icons">
                            <ul>
                                <li><a data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left"
                                        href="#">
                                        <span>
                                            <iconify-icon icon="ph:heart" width="24" height="24"></iconify-icon>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left"
                                        href="#">
                                        <span>
                                            <iconify-icon icon="nimbus:eye" width="24" height="24"></iconify-icon>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                @empty
                @endforelse


                </div>
            </div>
        </section>
    <!-- related product end -->

@endsection
@push('frontend_js')

 <script src="{{ asset('frontend/assets/js/zoomsl.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif
@endpush
