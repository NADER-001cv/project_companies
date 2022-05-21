@extends('layouts.master')
@section('content')

<div class="row">

    <div class="col-12">
       @include('partials.notification')
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
             <a href="{{route('categories.create')}}" class="text-white text-capitalize ps-r"> New</a>
            {{-- <h6 class="text-white text-capitalize ps-r">New</h6> --}}
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nb Jobs</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($categories as $categorie)

                  <tr>
                      <td class="align-middle">{{$categorie->name}} </td>
                      <td class="align-middle">{{$categorie->description}} </td>
                      <td class="align-middle text-center text-sm">

                        @if ($categorie->status == 1)
                        <a href="{{ route('categories.disable', $categorie) }}"><span class="badge badge-sm bg-gradient-success">published</span></a>
                        @else
                       <a href="{{ route('categories.enable', $categorie) }}"><span class="badge badge-sm bg-gradient-danger">no published</span></a>
                        @endif
                       </td>
                      <td class="align-middle text-center">{{$categorie->jobs->count()}} </td>

                      <td class="align-middle text-center">
                          <form id="{{$categorie->id}}" action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
                        <a href="{{ route('categories.edit', $categorie) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit categorie">
                            Edit
                        </a>&nbsp;
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                          <button href="{{ route('categories.destroy', $categorie->id) }}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete categorie">
                            Delete
                          </button>
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
