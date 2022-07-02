@if(Session::has('role'))
@extends('layouts.dashboard_nav')
@section('content')
<div class="justify-content-center">
    <div class="row col-md-12 justify-content-center m-auto"> 
        <div class="col-md-12" style="margin-top:80px; margin-bottom: 200px">
            <h2 style="text-align: center">Admins</h2>

            <table class="table table-striped" >
                <thead>
                    <tr class="th-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th colspan="4">Action</th>
                </tr>
                </thead>
                <tbody>
                        @foreach ($admins as $item) 
                    <tr>
                        <td>{{$item}}</td>
                        {{-- <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->message}}</td> --}}
                        <td>
                            <button class="btn btn-secondary">View</button>
                            <button class="btn btn-danger ">Delete</button>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                
               
            </table>
        </div>
    </div>
</div>
       

@endsection
@endif