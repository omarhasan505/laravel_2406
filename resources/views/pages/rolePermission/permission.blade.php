@extends('pages.dashboard')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Permiss List</h4>
        <a href="{{ route('rolePermission.create.role') }}" class="btn btn-sm btn-primary  p-2">Create Role</a>
    </div>

    <div class="card-body text-center">



            <form action="{{ route('rolePermission.user.permission.store') }}" method="post">
                <input type="hidden" name="role_id" value="{{ $role->id }}">
                @csrf
                <table class=" table table-bordered table-striped">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Permissions Name
                </th>
                <th>
                    Action
                </th>
            </tr>
            @forelse ($permissions as $key => $permission)

            <tr>
                <td>
                    {{ ++$key }}
                </td>
                <td>

                        <label for="permission_{{ $permission->id }}">
                            {{ $permission->name }}
                        </label>


                </td>
                <td>
                    <label for="permission_{{ $permission->id }}">
                        <input value="{{ $permission->name }}"  type="checkbox" name="permission[]"  id="permission_{{ $permission->id }}"
                        {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                        >
                    </label>

                </td>
            </tr>

            @empty

            @endforelse
        </table>
        <button type="submit" class="btn btn-primary w-100 mt-3">Assigned Permission</button>
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
