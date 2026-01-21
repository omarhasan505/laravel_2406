@extends('pages.dashboard')

@section('content')


<div class="card p-3">
    <div class="card-header d-flex justify-content-between align-items-center">
     <h4 class="mb-0">All Product List</h4>
     <a href="{{ route('products.product.store') }}" class="btn btn-primary p-2">Store Product</a>
    </div>
    <div class="card-body text-center">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Product Name
                </th>
                <th>
                    Price
                </th>
                <th>
                    Action
                </th>
            </tr>
            @forelse ($products as $key => $product )

               <tr>
                 <td>
                    {{ ++$key }}
                </td>
                <td>
                    {{ $product->title }}
                </td>
                <td>
                    {{ $product->price }}
                </td>
                <td>
                    <a href="{{ route('products.product.edit' , $product->id) }}" class="btn btn-primary btn-sm mx-1 ">Edit</a>
                    <a href="{{ route('products.product.delete' , $product->id) }}" class="btn btn-danger btn-sm mx-1 ">Delete</a>
                </td>
               </tr>

            @empty
            <tr>
                <td colspan="4" class="text-danger">No Product Found</td>
            </tr>
            @endforelse
        </table>
    </div>
</div>

@endsection

@push('backend_js')
  @if(session('success'))
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
