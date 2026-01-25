@extends('pages.dashboard')

@section('content')


<div class="card p-3">
    <div class="card-header d-flex justify-content-between align-items-center">
     <h4 class="mb-0">All Product List</h4>
     <a href="{{ route('products.product.store') }}" class="btn btn-primary p-2">Store Product</a>
    </div>
    <div class="card-body text-center">
        <table class="table table-bordered table-striped table-responsive ">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Product Name
                </th>
                <th>
                    Product Images
                </th>
                <th>
                    Action
                </th>
            </tr>

            @forelse ($productImages as $key => $images )

               <tr>
                 <td>
                    {{ ++$key }}
                </td>
                <td>
                    {{ $images ->title }}
                    {{-- @forelse($images->images as $name)
                       <span>{{ $name->product_name }}</span>
                    @empty
                    <span class="text-danger mb-0">No Name Found!</span>
                    @endforelse --}}
                </td>
                <td>

                    @forelse ($images->images as  $item)
                    <img class="mx-1" style="width: 40px; height:40px;" src="{{ asset('storage/productImage/' . $item->image) }}" alt="">
                    @empty
                    <p class="mb-0 text-danger">No Image Found!</p>


                    @endforelse

                </td>

                <td class="d-flex justify-content-around ">
                    {{-- for --}}

                    <a href="{{ route('products.edit.product.image' , $images->id) }}" class="text-primary  p-2 d-flex align-items-center"><iconify-icon icon="cuida:edit-outline" width="24" height="24"></iconify-icon></a>
                    <a href="{{ route('products.delete.product.image' , $images->id) }}" class="text-danger  p-2 d-flex align-items-center"><iconify-icon icon="mingcute:delete-line" width="24" height="24"></iconify-icon></a>
                </td>
               </tr>

            @empty
            <tr>
                <td colspan="4" class="text-danger">No Product Found</td>
            </tr>
            @endforelse
        </table>
<div class="row">
    <div class="col-lg-6 mx-auto mt-2">
       {{ $productImages->links('pagination::bootstrap-5') }}

    </div>
</div>



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
