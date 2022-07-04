@if(Session::has('role'))
@extends('layouts.dashboard_nav')
@section('content')
<div class="justify-content-center">
    <div class="row col-md-12 justify-content-center m-auto"> 
        <div class="col-md-12" style="margin-top:80px; margin-bottom: 200px">
            <h2 style="text-align: center">Admins</h2>
            @if (Session::has('message'))
            <div class="alert alert-warning">
                <span>{{Session::get('message')}}
            </div>
            {{Session::forget("message")}}
            @endif

            <table class="table table-striped" >
                <thead>
                    <tr class="th-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>school</th>
                    <th>Role</th>
                    @if(Session::get('role') == 'admin')<th colspan="6">Action</th>@endif
                </tr>
                </thead>
                <tbody>
                        @foreach ($admins as $item) 
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->schoolname}}</td>
                        <td>
                        @if($item->role == 'school')
                            School President 
                        @else 
                            General Admin 
                        @endif
                    </td>
                    @if(Session::get('role') == 'admin')
                        <td>
                            <a href="/admin/editadmin/{{$item->id}}" class="btn btn-primary col-md-3">View</a> 
                            <a onclick="return confirm('are you sure you want to delete? ')" href="/admin/deleteadmin/{{$item->id}}" class="btn btn-danger col-md-5 " >Delete</a>  
                        </td>
                    @endif
                        
                    </tr>
                    @endforeach
                </tbody>
                
               
            </table>
        </div>
    </div>
</div>
       

@endsection
@else
    <div class="row m-5">
        <div class="row justify-content-center">
            <div class="row cards">
                <div class="col-md-10 m-auto alert alert-danger " >
                    <h1 style="text-align: center; color: red">You are not authorized to view this page</h1>
                </div>
            </div>
        </div>
    </div>

@endif
