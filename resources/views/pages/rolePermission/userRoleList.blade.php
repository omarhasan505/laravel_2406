@extends('pages.dashboard')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Role List</h4>
        <a href="{{ route('rolePermission.create.role') }}" class="btn btn-sm btn-primary  p-2">Create Role</a>
    </div>

    <div class="card-body text-center">



            <table class=" table table-bordered table-striped">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Role Name
                </th>
                <th>
                    Action
                </th>
            </tr>
            @forelse ($users as $key => $role)

            <tr>
                <td>
                    {{ ++$key }}
                </td>
                <td>

                        {{ $role->name }}


                </td>
                <td>
                    {{-- <label for="role_{{$role->id}}">
                        <input   type="checkbox" name="roles[]" value="{{$role->name}}" id="role_{{ $role->id }}"  {{ $users->hasRole($role->name) ? 'checked' : '' }}>
                    </label> --}}
                    <a href="{{ route('rolePermission.user.permission.list' , $role->id) }}" style="color: #4e00c388"><iconify-icon icon="ic:round-key" width="30" height="30"></iconify-icon></a>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="2">
                    No Role Found!
                </td>
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
