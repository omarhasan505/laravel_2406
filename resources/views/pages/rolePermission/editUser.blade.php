@extends('pages.dashboard')

@section('content')

        <div class="card shadow p-3">
            <div class="card-header d-flex justify-content-between align-item-center ">
                    <h4 class="mb-0">Edit Profile</h4>
                    <a href="{{ route('rolePermission.list.user') }}" class="btn btn-primary  p-2">User list</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('rolePermission.update.user' , $editUser->id) }}" method="post" enctype="multipart/form-data" >

                        @csrf
                         @method('put')

                        <div class="row">
                            <div class="col-lg-4 text-center position-relative">

                                <span class="remove" style="position: absolute; right:92px; top:-13px; display:none; line-height:0; justify-content:center;     align-item: center; padding:8px; border:2px solid red; color:red; border-radius: 10px; cursor: pointer; " >
                                    <iconify-icon icon="pajamas:remove" width="16" height="16"></iconify-icon>
                                </span>

                               <label for="imgInp">

                                <img id="user_image" style="max-width: 180px; cursor:pointer; border:1px solid #00000029 " class="img-fluid w-100 " src="{{ $editUser->userProfile ?  asset('storage/userProfile/' . $editUser->userProfile)  :  asset('backend/assets/img/add-image.jpg') }}" alt="">

                                <input hidden name="user_image" class="form-control" accept="image/*" type='file' id="imgInp" />
                                @error('user_name')
                                <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="user_name">
                                            user name:
                                            <input  type="text" placeholder="user name" name="user_name" class="form-control" value="{{ $editUser->name }}">
                                        </label>
                                        <label for="user_email" class="mt-2">
                                            user email:
                                            <input type="email" placeholder="user email" name="user_email" class="form-control" value="{{ $editUser->email }}">
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                         <label for="user_password">
                                            new password:
                                            <input type="password" placeholder="user password" name="user_password" class="form-control">
                                            @error('user_password')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </label>
                                        <label for="user_confirm_password" class="mt-2">
                                            confirm passsword:
                                            <input type="password" placeholder="confirm password" name="user_confirm_password" class="form-control">
                                            @if(session('pass_error'))
                                                <p class="text-danger"> {{ session('pass_error') }} </p>

                                            @endif
                                        </label>
                                    </div>
                                   <div class="col">
                                     <button type="submit" class="btn btn-primary mt-3 p-2">Update Info</button>
                                   </div>
                                </div>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>

@endsection

@push('backend_js')

<script>
    let defaultImage = `{{ asset('backend/assets/img/add-image.jpg') }}`;
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        user_image.src = URL.createObjectURL(file);
        $('.remove').show();
      }
    };
    $('.remove').on('click', function(){
$('#user_image').attr('src' , defaultImage);
$('.remove').hide();
    });

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
@endif



@endpush
