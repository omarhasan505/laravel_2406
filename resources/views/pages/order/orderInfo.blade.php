@extends('pages.dashboard')

@section('content')

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">All Order List</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-responsive table-hover table-striped ">
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                        <th>Order ID</th>
                    </tr>
                    
                </table>
            </div>
        </div>

@endsection
