@extends('pages.dashboard')


@push('backend_css')

        <link href="filepond.css" rel="stylesheet" />
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endpush

@section( 'content')


                <div class="card p-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Edit Product Image</h4>
                        <a class="btn btn-primary btn-sm p-2" href="{{ route('products.show.product.image') }}">All Product Image</a>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('products.update.product.image' , $editProductImage->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="row">


                                <div class="col-lg-6">
                                    <label for="name">Product name:</label>
                                    <input type="text" class="form-control mb-2" name="name"  id="name">

                                </div>


                          <div class="col-lg-6">

                             <label for="product_id">Select Product Category:</label>

                             <select id="product_id" class="js-example-basic-single form-control mb-2" name="product_id" >
                                <option value="" selected disabled>--Select Product--</option>
                                @foreach ($allProduct as $product)

                                 <option  {{ $editProductImage->id == $product->id ? 'selected' : '' }}  value="{{ $product->id }}">{{ $product->title }}</option>

                                 @endforeach
                                </select>

                            @error('product_id')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                          </div>

                           <div class="col-lg-12">
                            <label for="images">Upload Image:</label>
                                    <input type="file" multiple name="images[]" value="{{ $editProductImage->image }}" />
                                     @error('images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                                <div class="row ">
                                    @forelse ($editProductImage->images as $item)
                                <div class="card  mx-1 col-lg-2 text-center ">
                                    <div class="card-body ">
                                    <img style="width: 100px; height:auto;" src="{{ asset('storage/productImage/' . $item->image)  }}" alt="">
                                    <a href="{{ route('products.delet.edit.product.image' , $item->id) }}"   class="text-danger  p-2 d-flex align-items-center"><iconify-icon icon="mingcute:delete-line" width="20" height="20"></iconify-icon></a>

                                </div>

                            </div>
                            @empty
                            @endforelse
                                </div>

                            <button type="submit" class="btn btn-primary p-2 mt-3 w-100">Store Image</button>
                            </div>
                        </form>
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

<script src="filepond.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[type="file"]');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement, {
        storeAsFile:true
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});




@endpush


