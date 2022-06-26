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
        padding: 6%;

    }
    .col-md-4{
        text-align: center;
    }
</style>

<div class="justify-content-center">
    <div class="row col-md-12">
        <div class="row cards" style="margin-top: 100px">
            @if(count($itemss))
            @foreach($itemss as $item)
            <div class="card col-md-3">
                <h3>{{$item->itemname}}</h3>
                <p>{{$item->name}}<br>{{$item->description}}</p>
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

@endsection