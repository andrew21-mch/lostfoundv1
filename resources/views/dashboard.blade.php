@extends('layouts.dashboard_nav')
@section('content')

<style>
    .card{
        padding: 50px;
        margin: 2%;
        background-color: rgba(26, 11, 77, 0.76);
        color: white;
    }
    .card:hover{
        padding: 8%;

    }
    .col-md-4{
        text-align: center;
    }
</style>

<div class="justify-content-center">
    <div class="row col-md-12">
        <div class="row cards" style="margin-top: 100px">
            <div class="card col-md-3">
                Schools
                <h1>{{$schools}}</h1>
            </div>
            <div class="card col-md-4">
                Missing Items
                <h1>{{$items}}</h1>
            </div>
            <div class="card col-md-3">
                Admins
                <h1>{{$admins}}</h1>
            </div>
        </div>
    </div>

</div>

@endsection