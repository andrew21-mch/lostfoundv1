@extends('layouts.dashboard_nav')
@section('content')

<style>
  .form{
    max-width: 500px;
    background-color: white;
    
  }
  .cards{
    margin-top: 100px;
  }
  .card{
    background-color: rgb(80, 57, 134);
    color: white;
    margin: 2%;
    padding: 3%;
  }
  .card:hover{
    color: blueviolet;
    background-color: wheat;
    padding: 4%;
  }

  a{
    color:  rgb(80, 57, 134);
    text-decoration: none;
  }
  a:hover{
    color: white;
    background-color: rgb(80, 57, 134);
    text-decoration: none;
  }
</style>
@if (Session::has('role'))
    <div class="row m-auto">
    <div class="row justify-content-center">
        <div class="row cards">
        @if($school)
        @if (Session::has('message'))
            <div class="alert alert-success">
              <span>
                  {{Session::get('message')}}
              </span>
              {{Session::forget('message')}}
            </div>
            
        @endif
        @foreach($school as $item)
            <div class="card col-md-3">
                    {{$item->schoolid}}
                    {{$item->schoolname}}
                    {{$item->office_location}} <br>

                    <div class="row mt-2">
                        {{-- <a href="/view/{{$item->id}}" class=" btn btn-primary w-50">View</a> --}}
                        @if (Session::get('role') == 'admin')'
                            <a href="/schools/delete/{{$item->schoolid}}" class=" btn btn-danger w-50">Delete</a>
                        @endif
                    </div>
            </div>
        
        @endforeach
        </div>
        @elseif($schoolss)
        <table class="table table-striped">
            <tr>
                <thead class="thread">
                    <th>Name</th>
                    <th>Location</th>
                    <th>Action</th>
                </thead>
            </tr>
            <tbody>
                    <td>{{$schoolss[0]->name}}</td>
                    <td>{{$schoolss[0]->office_location}}</td>
                    <td>
                        <a href="/view/{{$schoolss[0]->id}}" class="btn-primary">View</a>
                        <a href="/delete/{{$schoolss[0]->id}}" class="btn-primary">Delete</a>
                    </td>

                </tr>
                
            </tbody>
           
        </table>
        @endif

    </div>
</div>
@else
    <div class="row m-auto">
        <div class="row justify-content-center">
            <div class="row cards">
                <div class="col-md-10 m-auto alert alert-danger " >
                    <h1 style="text-align: center; color: red">You are not authorized to view this page</h1>
                </div>
            </div>
        </div>
    </div>
@endif


@endsection