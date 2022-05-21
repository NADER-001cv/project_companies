@extends('layouts.master')
@section('content')

        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Registration Form</h4>

            </div>
        </div>
        <div class="card-body" style="margin-top: 50px">
            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data" role="form"
                class="text-start">
                @method('POST')
                @csrf
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Name</label>
                    <input type="email" name="Name" class="form-control">
                </div>
                @error('Name')
                    <span class="alert-danger">{{ $message }}</span>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                @error('email')
                    <span class="alert-danger">{{ $message }}</span>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Mobile no.</label>
                    <input type="text" name="Monile no." class="form-control">
                </div>
                @error('Mobile no.')
                    <span class="alert-danger">{{ $message }}</span>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="Location" class="form-control">
                </div>
                @error('Location')
                    <span class="alert-danger">{{ $message }}</span>
                @enderror

                 <div class="input-group input-group-outline mb-3">
                    <label class="form-label">post job</label>
                    <input type="text" name="post job" class="form-control">
                </div>
                @error('post job')
                    <span class="alert-danger">{{ $message }}</span>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Minimum education</label>
                    <input type="text" name="minimum_education" class="form-control">
                </div>
                @error('minimum_education')
                    <span class="alert-danger">{{ $message }}</span>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Minimum experience</label>
                    <input type="number" name="minimum_experience" class="form-control">
                </div>
                @error('minimum_experience')
                    <span class="alert-danger">{{ $message }}</span>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Description</label>
                    <input type="type" name="Description" class="form-control">
                </div>
                @error('Description')
                 @enderror
                </div>
                <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Logo</label> --}}
                    <input type="file" name="logo" class="form-control">
                </div>
                @error('Logo')
                 @enderror
                </div>


                <div class="text-right">
                    <button type="submit" class="btn bg-gradient-warning my-4 mb-2">Apply</button>

                </div>

            </form>
        </div>

        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </div>
@endsection
