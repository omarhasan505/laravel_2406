@extends('pages.dashboard')



@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="row">
        <div class="card mb-4">
        <h5 class="card-header">Profile Picture</h5>
        <div class="card-body d-flex align-items-center gap-4">

                <img id="user_image"
                    src="{{ asset('storage/' . auth()->user()->avatar) }}"
                    class="rounded"
                    width="120"/>




            <form action="{{ route('profile.update.avatar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">

                     <input required  class="form-control" name="avatar" accept="image/*" type='file' id="imgInp" />
                </div>
                <button class="btn btn-primary">
                    <i class="bx bx-upload me-1"></i> Upload
                </button>
            </form>

        </div>
         <p class="content col container">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit reprehenderit, officia, exercitationem autem doloremque possimus illum ipsa excepturi repudiandae omnis veniam assumenda quas nobis temporibus consequatur! Rerum magnam voluptate id quisquam deleniti quae! Aspernatur eveniet, excepturi atque, provident asperiores reprehenderit accusamus sequi animi velit maxime quaerat! Aut minima quibusdam placeat.
            </p>
    </div>
</div>

<div class="row">

        <!-- Update Info -->
        <div class="col-md-6">
            <form action="{{ route('profile.update.info') }}" method="POST">
                @csrf
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ auth()->user()->name }}"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ auth()->user()->email }}"
                                required
                            >
                        </div>

                        <button class="btn btn-primary">
                            <i class="bx bx-save me-1"></i> Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Update Password -->
        <div class="col-md-6">
            <form action="{{ route('profile.update.password') }}" method="POST">
                @csrf
                <div class="card mb-4">
                    <h5 class="card-header">Change Password</h5>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                required
                            >
                        </div>

                        <button class="btn btn-danger">
                            <i class="bx bx-lock me-1"></i> Update Password
                        </button>
                    </div>
                </div>
            </form>
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
        // $('.remove').show();
      }
    };
//     $('.remove').on('click', function(){
// $('#user_image').attr('src' , defaultImage);
// $('.remove').hide();
//     });

</script>


@endpush
