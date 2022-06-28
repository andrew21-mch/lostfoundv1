@extends('layouts.dashboard_nav')
@section('content')

<style>
   .col-md-12{
    margin-top: 100px;
    border-style: groove;
    border-color: transparent;
    background-color:white;
    padding: 4%;
    max-width: 500px;
   }
</style>

<div class="contain row m-auto">
    <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px">
        <div class="col-md-12 w-50 m-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tokens as $token)
                        <tr>
                            <td>{{$token->token}}</td>
                            <td><a class="btn btn-danger" href="deletekey/{{$token->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection
