@extends('pages.dashboard')

@section( 'content')

        <div class="row  mt-4">
            <div class="col-lg-7 mx-auto">
                <div class="card p-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Edit Product</h4>
                        <a class="btn btn-primary btn-sm p-2" href="{{ route('products.product.list') }}">All Product List</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store.product.edit' , $newProduct->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            
                            <label for="name">Product name:</label>
                            <input type="text" class="form-control mb-2" name="name"  id="name" value="{{ $newProduct->title }}">

                            @error('name')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label for="price">Product price:</label>
                            <input type="number" class="form-control mb-2" name="price" id="price" value="{{ $newProduct->price }}">

                            @error('price')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button type="submit" class="btn btn-primary p-2 mt-3 w-100">Update</button>
                        </form>
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
