@extends('pages.dashboard')

@push('backend_css')

<link rel="stylesheet" href="{{ asset('backend/assets/css/rte_theme_default.css') }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endpush

@section( 'content')


                <div class="card p-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Edit Product</h4>
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
                                {{-- @foreach ($allCategory as $category)

                                 <option value="{{ $category->id }}">{{ $category->title }}</option>

                                 @endforeach --}}
                                </select>

                            @error('category')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                          </div>


                            <div class="col-lg-3">
                                <label for="price">Product price:</label>
                            <input type="number" class="form-control mb-2" name="price" id="price" >
                             @error('price')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>

                            <div class="col-lg-3">
                                <label for="discount_price">Discount price:</label>
                            <input type="number" class="form-control mb-2" name="discount_price" id="discount_price" >
                             @error('discount_price')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>

                            <div class="col-lg-3">
                                <label for="stock">Stock:</label>
                                <select name="stock" id="stock" class="form-control  mb-2">
                                    <option value="" selected disabled>-- Select Stock --</option>
                                    <option value="1">In Stock</option>
                                    <option value="0">Out of Stock</option>
                                </select>
                                 @error('stock')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>

                            <div class="col-lg-3">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control  mb-2">
                                    <option value="" selected disabled>-- Select Status --</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                 @error('status')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label for="description">Description:</label>
                                <div id="div_editor1" >
                                    <p>This is a default toolbar demo of Rich text editor.</p>
                                </div>
                                <textarea hidden name="description" id="description" ></textarea>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label for="feature">Feature:</label>
                                <div id="div_editor2">

                                    <p>This is a default toolbar demo of Rich text editor.</p>
                                </div>
                                <textarea hidden name="feature" id="feature" ></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary p-2 mt-3 w-100">Store</button>
                            </div>
                        </form>
                    </div>
                </div>

@endsection

@push('backend_js')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script src="{{ asset('backend/assets/js/rte.js') }}"></script>
<script src="{{ asset('backend/assets/js/all_plugins.js') }}"></script>
<script>
	var editor1 = new RichTextEditor("#div_editor1");

    $('form').on('submit' , function(e){
        $('#description').val(editor1.getHTMLCode());
    });

	var editor2 = new RichTextEditor("#div_editor2");
    $('form').on('submit' , function(e){
        $('#feature').val(editor2.getHTMLCode());
    });


	//editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
</script>

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

<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});

@endif
@endpush
