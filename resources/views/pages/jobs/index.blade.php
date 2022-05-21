@extends('layouts.master')
@section('content')

<div class="row">

    <div class="col-12">
       @include('partials.notification')
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
             <a href="{{route('jobs.create')}}" class="text-white text-capitalize ps-r"> New</a>
            {{-- <h6 class="text-white text-capitalize ps-r">New</h6> --}}
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                  {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> --}}
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($jobs as $job)

                  <tr>
                      <td class="align-middle">{{$job->name}} </td>
                      <td class="align-middle">{{$job->category->name}} </td>
                      <td class="align-middle">{{$job->description}} </td>

                      <td class="align-middle text-center">
                        <a href="{{ route('jobs.edit', $job) }}" class="text-success font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit job">
                            Edit
                          </a>&nbsp;

                           <a href="{{ route('jobs.destroy', $job->id) }}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete job">
                            Delete
                          </a>
                          <form id="{{$job->id}}" action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                      </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.confirme')

@endsection
