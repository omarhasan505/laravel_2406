@extends('pages.dashboard')


@push('backend_css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endpush

@section( 'content')


                <div class="card p-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Store Product</h4>
                        <a class="btn btn-primary btn-sm p-2" href="{{ route('products.product.list') }}">All Product List</a>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('products.product.list.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                          <div class="col-lg-6">
                              <label for="name">Product name:</label>
                            <input type="text" class="form-control mb-2" name="name"  id="name">
                            @error('name')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="col-lg-6">

                             <label for="category">Category:</label>

                             <select id="category" class="js-example-basic-single form-control mb-2" name="category" >
                                <option value="" selected disabled>--Select Category</option>
                                @foreach ($allCategory as $category)

                                 <option value="{{ $category->id }}">{{ $category->title }}</option>

                                 @endforeach
                                </select>

                            @error('category')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                          </div>

                            <button type="submit" class="btn btn-primary p-2 mt-3 w-100">Store</button>
                            </div>
                        </form>
                    </div>
                </div>

@endsection

@push('backend_js')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});


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


