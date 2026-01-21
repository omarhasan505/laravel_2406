

@extends('pages.dashboard')

@section('content')

@forelse ($users as $key => $user )



     <div class="card shadow-sm p-4 mb-4">
        <div class="row justify-content-between align-item-center ">
            <div class="col-lg-2 d-flex align-items-center">
                <span
                style="color: white;
                background:#4e00c388;
                width:40px;
                height:40px;
                border-radius:50%;
                display:inline-flex;
                align-items:center;
                justify-content:center;"
                >{{ ++$key }}</span>
            </div>
            <div class="col-lg-2 d-flex align-items-center">
               {{Str::upper( $user->name) }}
            </div>
            <div class="col-lg-2 d-flex align-items-center">
                {{Str::upper( $user->email) }}
            </div>
            <div class="col-lg-2 d-flex align-items-center">
                <img style="width: 50px; border-radius:10px;" src="{{ $user->userProfile ? asset('storage/userProfile/'.$user->userProfile) : asset('backend/assets/img/add-image.jpg') }}" alt="">
            </div>
            <div class="col-lg-2 d-flex  align-items-center" >
                <div class="d-flex justify-content-between align-items-center" style="width: 100%">
                    <a class="" href="{{ route('rolePermission.edit.user' , $user->id) }}"><iconify-icon icon="flowbite:edit-outline" width="24" height="24"></iconify-icon></a>
                    <a class="text-danger" href="{{ route('rolePermission.delet.user' , $user->id) }}"><iconify-icon icon="fluent:delete-12-regular" width="24" height="24"></iconify-icon></a>
                    <a class="" href="{{route('rolePermission.user.role' , $user->id)}}"><iconify-icon icon="eos-icons:admin-outlined" width="24" height="24"></iconify-icon></a>
                </div>
            </div>
        </div>
    </div>

@empty

@endforelse


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
