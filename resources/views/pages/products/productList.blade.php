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
                    Discount Price
                </th>
                <th>
                    Stock
                </th>
                <th>
                    Status
                </th>
                <th>
                    Category
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
                    {{ $product->discount_price }}
                </td>
                <td class="{{ $product->in_stock == 1 ? 'text-success' : 'text-danger' }}">
                    {{ $product->in_stock ? 'In Stock' : 'out of Stock' }}
                </td>
                <td class="{{ $product->status == 1 ? 'text-success' : 'text-danger' }}">
                    {{ $product->status ? 'Active' : 'Inactive' }}
                </td>
                <td class="text-primary">
                    {{ $product->category_id }}
                </td>
                <td class="d-flex justify-content-between ">
                    <a href="{{ route('products.product.edit' , $product->id) }}" class="text-primary  p-2 d-flex align-items-center"><iconify-icon icon="cuida:edit-outline" width="24" height="24"></iconify-icon></a>
                    <a href="{{ route('products.product.delete' , $product->id) }}" class="text-danger  p-2 d-flex align-items-center"><iconify-icon icon="mingcute:delete-line" width="24" height="24"></iconify-icon></a>
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
