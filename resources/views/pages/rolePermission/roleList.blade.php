@extends('pages.dashboard')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Role List</h4>
        <a href="{{ route('rolePermission.create.role') }}" class="btn btn-sm btn-primary  p-2">Create Role</a>
    </div>

    <div class="card-body text-center">
        <form action="{{ route('rolePermission.user.role.store' ) }}" method="post">
            <input  type="hidden" name="user_id" value="{{ $users->id }}">
            @csrf
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
            @forelse ($user_role as $key => $role)

            <tr>
                <td>
                    {{ ++$key }}
                </td>
                <td>
                    <label for="role_{{ $role->id }}">
                        {{ $role->name }}
                    </label>

                </td>
                <td>
                    <label for="role_{{$role->id}}">
                        <input   type="checkbox" name="roles[]" value="{{$role->name}}" id="role_{{ $role->id }}"  {{ $users->hasRole($role->name) ? 'checked' : '' }}>
                    </label>
                </td>
            </tr>

            @empty

            @endforelse
        </table>
        <button type="submit" class="btn btn-primary w-100 mt-3">Assign Role</button>
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
