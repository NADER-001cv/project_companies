@extends('layouts.master')
@section('content')
    
<div class="card z-index-0 fadeIn3 fadeInBottom">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add new category</h4>
        
      </div>
    </div>
    <div class="card-body" style="margin-top: 50px">
      <form  action="{{route('categories.store')}}"  method="POST" role="form" class="text-start">
        @method('POST')
        @csrf
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Description</label>
          <input type="text" name="description" class="form-control">
        </div>
       
        <div class="text-right">
          <button type="submit" class="btn bg-gradient-warning my-4 mb-2">Save</button>
          <a type="button" href="{{route('categories.index')}}" class="btn bg-gradient-primary my-4 mb-2">quick</a>
        </div>
       
      </form>
    </div>
  </div>
@endsection
