@extends('layouts.master')
@section('content')

<div class="card z-index-0 fadeIn3 fadeInBottom">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add new company</h4>

      </div>
    </div>
    <div class="card-body" style="margin-top: 50px">
      <form  action="{{route('jobs.store')}}" method="POST" enctype="multipart/form-data" role="form" class="text-start">
        @method('POST')
        @csrf
        <div class="input-group input-group-outline my-3">
          <label class="form-label"></label>
          <select name="category_id" id="" class="form-control">
            <option value="-1" selected disabled>Choose category </option>
            @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}"> {{ $categorie->name }}</option>
            @endforeach
          </select>
        </div>
        @error('category_id')
        <span class="alert-danger">{{ $message }}</span>
    @enderror

        <div class="input-group input-group-outline my-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        @error('name')
        <span class="alert-danger">{{ $message }}</span>
    @enderror
        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Description</label>
          <input type="text" name="description" class="form-control">
        </div>
        @error('description')
        <span class="alert-danger">{{ $message }}</span>
    @enderror

        <div class="file-field col s12">
          <div class="btn indigo">
           <span>Gallery</span>
            <input type="file" accept="image/*" name="gallery" id="file" onchange="readURL(this);" />
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" name="gallery" type="hidden" placeholder="Gallery">
          </div>
          <img id="blah" src="#" alt="" style=" max-width:30%; max-height: 227px;"  />
          @error('gallery')
              <span class="alert-danger">{{ $message }}</span>
          @enderror
      </div>


        <div class="text-right">
          <button type="submit" class="btn bg-gradient-warning my-4 mb-2">Save</button>
          <a type="button" href="{{route('jobs.index')}}" class="btn bg-gradient-primary my-4 mb-2">quick</a>
        </div>

      </form>
    </div>

    <script>
      function readURL(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();

             reader.onload = function (e) {
                 $('#blah')
                     .attr('src', e.target.result);
             };

             reader.readAsDataURL(input.files[0]);
         }
      }
    </script>
  </div>
@endsection
