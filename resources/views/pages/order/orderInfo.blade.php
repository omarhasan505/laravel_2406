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
                    @forelse ($orderlist->details as $key => $list)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $list->product_name }}</td>
                            <td>{{ $list->quantity }}</td>
                            <td>{{ $list->price }}</td>
                            <td>{{ $list->subtotal }}</td>
                            <td>{{ $list->order_id }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-danger text-center">No Product Found</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>

@endsection
