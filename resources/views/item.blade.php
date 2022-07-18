@extends('layouts.nav')
@section('content')
        <div class="row m-2 col-md-8 m-auto">
            <h2>{{$itemd[0]->itemname}}:{{$itemd[0]->itemid}} Details</h2><hr>
            <div class="row col-md-4 m-1">
                <h3 class="m-3">{{$itemd[0]->itemname}}</h3>
                <p> School: {{$itemd[0]->schoolname}} <br> 
                    Description: {{$itemd[0]->description}} <br>
                    <form action="https://wa.me/{{$contact}}">
                    <button class="btn btn-success col-md-5 m-1" type="submit">Contact</button></form>
                </p>

            </div>
            <div class="row col-md-6 m-1">
                <img src="../images/{{$itemd[0]->image_url}}" style="height: 70%">
            </div>
        </div>
@endsection