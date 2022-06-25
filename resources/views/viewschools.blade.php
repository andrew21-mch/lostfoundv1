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
    margin: 2%;
    padding: 3%;
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

<div class="row m-auto">
    <div class="row justify-content-center">
        <div class="row cards">
        @if($school)
        @foreach($school as $item)
            <a class="card col-md-3">
                <div class="card-body">
                    {{$item->name}}
                    {{$item->office_location}} <br>

                    {{-- <div class="row mt-2">
                        <a href="/view/{{$item->id}}" class=" btn btn-primary w-50">View</a>
                        <a href="/delete/{{$item->id}}" class=" btn btn-danger w-25">Delete</a>
                    </div> --}}
                </div>
            </a>
        
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

@endsection