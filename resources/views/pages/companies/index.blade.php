@extends('layouts.master')
@section('content')

<div class="row">

    <div class="col-12">
       @include('partials.notification')
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
           <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <a href="{{route('companies.create')}}"  class="text-white text-capitalize  ps-r">Add New Companie</a>

                </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DearWalk</th>

                  {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> --}}
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
<h2>
    companies
</h2>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.confirme')

@endsection
