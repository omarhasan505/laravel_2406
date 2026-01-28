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
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Total Qty</th>
                    <th>Amount</th>
                    <th>Transaction ID</th>
                    <th>Order Details</th>
                    <th>Action</th>
                </tr>

                @forelse ($orderLists as $key => $list)
                    <tr>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->email }}</td>
                        <td>{{ $list->phone }}</td>
                        <td>{{ $list->address }}</td>
                        <td>{{ $list->quantity }}</td>
                        <td>{{ $list->amount }}</td>
                        <td>{{ $list->transaction_id }}</td>
                        <td>
                            <a href="{{ route('orders.order.info', $list->id) }}" class="btn btn-primary p-2 w-100">Info</a>
                        </td>
                        <td class=" d-flex justify-content-between align-items-center ">
                            <a href="{{ route('orders.order.passed', $list->id) }}" class="p-2 mx-1">
                                <iconify-icon icon="icon-park-outline:file-success" width="24" height="24"
                                    class="text-success"></iconify-icon>
                            </a>
                            <a href="{{ route('orders.order.delet', $list->id) }}" class="p-2 mx-1">
                                <iconify-icon icon="maki:cross" width="24" height="24"
                                    class="text-danger"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                @empty
                @endforelse

            </table>
            <div class="row">
                <div class="col-lg-6 mx-auto mt-2">
                    {{ $orderLists->links('pagination::bootstrap-5') }}

                </div>
            </div>
        </div>
    </div>
@endsection

@push('backend_js')

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
