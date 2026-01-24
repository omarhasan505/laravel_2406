@extends('pages.dashboard')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">All Category List</h4>
            <a href="{{ route('category.select.category') }}" class="btn btn-primary p-2">Add new category</a>
        </div>
        <div class="card-body text-center">
            <table class="table table-responsive table-bordered table-striped table-hover">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>image</th>
                    <th>status</th>
                    <th>meta title</th>
                    <th>parent_id</th>
                    <th>Action</th>
                </tr>
                @forelse ($allCategory as $key => $category)

                <tr>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->title }}
                    </td>
                    <td>
                        <img style="width: 60px; height:auto;" src="{{ $category ->image ? '/storage/category/' . $category->image : 'nno image found' }}" alt="">
                    </td>
                    <td class="{{ $category->status == 1 ? 'text-primary' : 'text-danger' }} text-center" >
                        {{ $category->status == 1 ? 'active' : 'inacitve' }}
                    </td>
                    <td>
                        {{ $category->meta_title }}
                    </td>
                     <td>
                        {{ $category->parent_id ? $category->parent_id : ' parent '  }}
                    </td>
                    <td class="d-flex justify-content-between">
                        <a href="{{ route('category.edit.category' , $category->id)}}" class=" text-primary px-1 "><iconify-icon icon="cuida:edit-outline" width="24" height="24"></iconify-icon></a>
                        <a href="{{ route('category.delete.category' , $category->id)}}" class="text-danger px-1 "><iconify-icon icon="mingcute:delete-line" width="24" height="24"></iconify-icon></a>
                    </td>



                </tr>

                @empty
                <tr>
                    <td class="alert alert-danger text-center" colspan="7">No data found!</td>
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
