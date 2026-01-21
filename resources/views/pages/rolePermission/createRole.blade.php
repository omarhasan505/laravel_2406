@extends('pages.dashboard')

@section('content')

<div class="card p-4 shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Create Role</h4>
        <a href="{{ route('rolePermission.list.role') }}" class="btn btn-sm btn-primary  p-2">All Role List</a>
    </div>
    <div class="card-body " >
        <form action="{{ route('rolePermission.store.role') }}" method="post">
            @csrf
            <label for="role_name">
                Role Name:
            </label>
            <input type="text" name="role_name" placeholder="Role name" class="form-control" >
            <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
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
@endpush
