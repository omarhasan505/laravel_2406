@extends('frontend.layout')

@section('frontend_content')
    <section id="billing_information">
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">

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
                                        <input type="text" placeholder="Your first name">
                                    </td>
                                    <td>
                                        <h3>
                                            Last Name
                                        </h3>
                                        <input type="text" placeholder="Your last name">
                                    </td>
                                    <td>
                                        <h3>
                                            Company Name(optional)
                                        </h3>
                                        <input type="text" placeholder="Company name">
                                    </td>
                                </tr>
                                <tr class="street">
                                    <td colspan="3">
                                        <h3>
                                            Street Address
                                        </h3>
                                        <input type="text" placeholder="Email">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>
                                            Country / Region
                                        </h3>
                                        <select name="Country" id="Country">
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="canada">Canada</option>
                                            <option value="noakhali">Noakhali</option>
                                        </select>
                                    </td>
                                    <td>
                                        <h3>
                                            States
                                        </h3>
                                        <select name="States" id="">
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Feni">Feni</option>
                                        </select>
                                    </td>
                                    <td>
                                        <h3>Zip Code</h3>
                                        <input type="text" placeholder="Zip code">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="parent d-flex justify-content-between">
                                            <div>
                                                <h3>
                                                    Email
                                                </h3>
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <div>
                                                <h3>
                                                    Phone
                                                </h3>
                                                <input type="text" placeholder="Number">
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
                            <textarea name="order_notes" id="">Notes about your order, e.g. special notes for delivery</textarea>
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
                                    <input type="radio" name="payment" id="payment" value="cod">
                                    Cash on delivery
                                </p>
                                <p>
                                    <input type="radio" name="payment" id="payment" value="Paypal">
                                    Paypal
                                </p>
                                <p>
                                    <input type="radio" name="payment" id="payment" value="Amazon">
                                    Amazon pay
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
