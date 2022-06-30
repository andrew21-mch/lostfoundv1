@extends('layouts.nav')
@section('content')
    <div class="container">
        <div class="row">
            <div class="row col-md-4 m-1">
                <h3>{{$itemd[0]->itemname}}</h3>
                <p> School: {{$itemd[0]->name}} <br> 
                    Description: {{$itemd[0]->description}} <br>
                    Contact: {{$itemd[0]->contact}} <a href="wa.me/{{$itemd[0]->contact}}" ><i class="fa fa-whatsap"></i></a>
                </p>

            </div>
            <div class="row col-md-4">
                <img src="../images/{{$itemd[0]->image_url}}"  width="50px" height="50px">
            </div>
        </div>
    </div>
@endsection