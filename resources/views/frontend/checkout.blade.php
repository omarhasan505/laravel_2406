@extends('frontend.layout')

@section('frontend_content')
    <section id="billing_information">
        <div class="container">
            <form action="{{ route('frontend.placeOrder') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-xl-7 billiing_table ">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Billing Information
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3>
                                            First Name
                                        </h3>
                                        <input name="first_name" id="first_name" type="text" placeholder="Your first name">
                                        @error('frist_name')
                                            <p class="text-danger mb-0">{{ $message }}</p>
                                        @enderror
                                    </td>
                                    <td>
                                        <h3>
                                            Last Name
                                        </h3>
                                        <input name="last_name" id="last_name" type="text" placeholder="Your last name">
                                        @error('last_name')
                                            <p class="text-danger mb-0">{{ $message }}</p>
                                        @enderror
                                    </td>
                                    <td>
                                        <h3>
                                            Company Name(optional)
                                        </h3>
                                        <input name="comapny_name" type="text" placeholder="Company name">
                                    </td>
                                </tr>
                                <tr class="street">
                                    <td colspan="3">
                                        <h3>
                                            Street Address
                                        </h3>
                                        <input name="address" id="address" type="text" placeholder="Address">
                                        @error('address')
                                            <p class="text-danger mb-0">{{ $message }}</p>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>
                                            Country / Region
                                        </h3>
                                        <select name="country" id="country">
                                            <option value="" selected disabled>--Select Country--</option>
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="canada">Canada</option>
                                            <option value="noakhali">Noakhali</option>
                                        </select>
                                        @error('country')
                                            <p class="text-danger mb-0">{{ $message }}</p>
                                        @enderror
                                    </td>
                                    <td>
                                        <h3>
                                            States
                                        </h3>
                                        <select name="states" id="states">
                                            <option value="" selected disabled>--Select States--</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Feni">Feni</option>
                                        </select>
                                        @error('states')
                                            <p class="text-danger mb-0">{{ $message }}</p>
                                        @enderror
                                    </td>
                                    <td>
                                        <h3>Zip Code</h3>
                                        <input name="zip_code" type="text" placeholder="Zip code">
                                        @error('zip_code')
                                            <p class="text-danger mb-0">{{ $message }}</p>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="parent d-flex justify-content-between">
                                            <div>
                                                <h3>
                                                    Email
                                                </h3>
                                                <input name="email" id="email" type="email" placeholder="Email">
                                                @error('email')
                                                    <p class="text-danger mb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <h3>
                                                    Phone
                                                </h3>
                                                <input name="phone" id="phone" type="number" placeholder="Number">
                                                @error('phone')
                                                    <p class="text-danger mb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ship" id="ship">
                                        <span>Ship to a different address</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="additional_info">
                            <h4>
                                Additional Info
                            </h4>
                            <h3>
                                Order Notes (Optional)
                            </h3>
                            <textarea name="order_notes" id="order_notes">Notes about your order, e.g. special notes for delivery</textarea>
                        </div>
                    </div>
                    <div class="col-xl-4 ">
                        <div class="order_summery">
                            <h4>
                                Order Summery
                            </h4>
                            @foreach (session('cart', []) as $key => $item)
                                <div class="total_items">

                                    <div class="items row">
                                        <div class="col-xl-3">
                                            <img class="img-fluid" src="{{ 'storage/productImage/' . $item['image'] }}"
                                                alt="">

                                        </div>
                                        <div class="col-xl-7">
                                            <h3>
                                                {{ $item['title'] }} &nbsp;
                                                <span>x<span>{{ $item['quantity'] }}</span></span>
                                            </h3>

                                        </div>
                                        <div class="col-xl-2">

                                            <span class="totalprice">
                                                {{ $item['price'] * $item['quantity'] }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @php
                                $totalPrice = 0;
                            @endphp

                            @foreach (session('cart', []) as $item)
                                @php
                                    $totalPrice = $totalPrice + $item['price'] * $item['quantity'];
                                @endphp
                            @endforeach

                            <div class="total_amount d-flex justify-content-between align-items-center">
                                <p>
                                    Subtotal:
                                </p>
                                <span>
                                    <span>
                                        {{ $totalPrice }} Tk
                                    </span>
                                </span>
                            </div>
                            <div class="total_amount d-flex justify-content-between align-items-center">
                                <p>
                                    Shipping:
                                </p>
                                <span>
                                    0.00 Tk
                                </span>
                            </div>
                            <div class="total_amount d-flex justify-content-between align-items-center">
                                <p>
                                    Total:
                                </p>
                                <span>
                                    <span>
                                        {{ $totalPrice }} Tk
                                    </span>
                                </span>
                            </div>
                            <div class="paying_method">
                                <h4>
                                    Payment Method
                                </h4>
                                <p>
                                    <input type="radio" name="payment" id="cod" value="cod">
                                    <label for="cod">Cash on delivery</label>
                                </p>
                                <p>
                                    <input type="radio" name="payment" id="online_payment" value="online_payment">
                                    <label for="online_payment">Online Payment</label>
                                </p>

                            </div>
                            <button type="submit">
                                Place Order
                            </button>
                        </div>


                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection

@push('frontend_js')

<script>
    var obj = {};
    obj.cus_name = $('#first_name').val();
    obj.cus_phone = $('#phone').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    // obj.amount = $('#total_amount').val();

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

@endpush
