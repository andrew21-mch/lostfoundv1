@extends('layouts.nav')
@section('content')
        <div class="row m-2 col-md-8 m-auto">
            <h2>{{$itemd[0]->itemname}}:{{$itemd[0]->itemid}} Details</h2><hr>
            <div class="row col-md-4 m-1">
                <h3 class="m-3">{{$itemd[0]->itemname}}</h3>
                <p> School: {{$itemd[0]->schoolname}} <br> 
                    Description: {{$itemd[0]->description}} <br>
                    <a href='http://wa.me/{{$itemd[0]->contact}}' class="btn btn-success col-md-5 m-1" style="a:hover{color: white; background-color:yellow}">{{$itemd[0]->phone}}</a> </a>
                </p>

            </div>
            <div class="row col-md-6 m-1">
                <img src="../images/{{$itemd[0]->image_url}}" style="height: 70%">
            </div>
        </div>
@endsection