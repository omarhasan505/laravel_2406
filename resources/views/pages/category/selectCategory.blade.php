
@push('backend_css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endpush

@extends('pages.dashboard')

@section('content')

<div class="card p-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Category Add+</h4>
        <a href="#" class=" btn btn-primary p-2">Show All</a>
    </div>

    <div class="card-body">
        <form action="{{ route('category.store.category') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-lg-6 mb-3">
                <label for="title">Title:</label>
                <input class="form-control " type="text" id="title" placeholder="Enter category title" name="title">
                @error('title')
                    <p class="text-danger">{{ $message  }}</p>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="category">Category</label>
                 <select class="js-example-basic-single form-control" name="category" >
                    <option value="" selected disabled>--Select--</option>
                   @foreach ($allCategory as $category)

                    <option value="{{ $category->id }}">{{ $category->title }}</option>

                   @endforeach
                 </select>
            </div>
            <div class="col-lg-8 mb-3">
                <label for="meta_title">Meta Title:</label>
                <input type="text" id="meta_title" class="form-control" placeholder="meta title" name="meta_title">
            </div>
            <div class="col-lg-4 mb-3">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="" selected disabled>--Select Status--</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                @error('status')
                    <p class="text-danger">{{ $message  }}</p>
                @enderror
            </div>
            <div class="col mb-3">
                <label for="meta_description">Meta Description:</label>
               <textarea type="text" id="meta_description" class="form-control" placeholder="meta description" name="meta_description"></textarea>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <label for="meta_image">Image</label>
                    <input type="file" id="meta_image" class="form-control w-100" name="meta_image" >
                </div>
                <div class="col-lg-3 mt-4">
                    <button class="btn btn-primary w-100 p-2" type="submit">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>

</div>

@endsection

@push('backend_js')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


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
