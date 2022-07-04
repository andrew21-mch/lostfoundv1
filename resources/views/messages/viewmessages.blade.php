@if(Session::has('role'))
@extends('layouts.dashboard_nav')
@section('content')
<div class="justify-content-center">
    <div class="row col-md-12 justify-content-center m-auto"> 
        <div class="col-md-12" style="margin-top:80px; margin-bottom: 200px">
            <h2 style="text-align: center">Messages</h2>
            @if (Session::has('message'))
                <div class="alert alert-success">
                    <span>{{Session::get('message')}}</span>
                </div>

                {{Session::forget("message")}}
            @endif
            <table class="table table-striped" >
                <thead>
                    <tr class="th-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th colspan="4">Message</th>
                    <th colspan="4">Action</th>
                </tr>
                </thead>
                <tbody>
                        @foreach ($received as $item) 
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            <button class="btn btn-secondary">View</button>
                            <a class="btn btn-danger " onclick="confirm('are you sure you want to delted this message? ')" href="/admin/deletemessage/{{$item->id}}">Delete</a>
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