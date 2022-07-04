@extends('layouts.dashboard_nav')
@section('content')

<style>
    .card{
        padding: 2%;
        margin: 2%;
        background-color: rgba(26, 11, 77, 0.76);
        color: white;
    }
    .btn-warning{
        background-color: rgb(245, 174, 67)
    }
    .card:hover{
        padding: 3%;

    }
    .col-md-4{
        text-align: center;
    }
</style>

<div class="justify-content-center">
    <div class="row col-md-12 justify-content-center m-auto">
        <div class="row cards" style="margin-top: 100px; margin-bottom: 100px">
            @if(Session::has('message'))
            <div class="alert alert-success">
                <span>
                    {{Session::get('message')}}
                </span>
            </div>
            {{Session::forget('message')}}
            @endif
            @if(count($itemss))
            @foreach($itemss as $item)
            <div class="card col-md-3">
                <h3>{{$item->itemname}} {{$item->itemid }}</h3>
                <p>{{$item->name}}<br>{{$item->description}}</p>
                <div class="row col-md-12">
                    <a href="/view/{{$item->itemid}}" class="btn btn-warning col-md-5 m-1">view</a>
                    <a href="/delete/{{$item->itemid}}" class="btn btn-danger col-md-5 m-1">delete</a>
                </div>
                
            </div>
            @endforeach

            @else
            <div class="card col-md-9 m-auto">
                <h1 style="text-align: center">Nothing Found</h1>
            </div>
            @endif
        </div>
    </div>

</div>

@endsectionz