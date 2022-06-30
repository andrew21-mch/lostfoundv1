@extends('layouts.nav')
@section('content')
    <div class="container">
        <div class="row">
            <div class="row col-md-4 m-1">
                <h3>{{$itemd[0]->itemname}}</h3>
                <p>{{$itemd[0]->description}}</p>
            </div>
            <div class="row col-md-4">
                <img src="images/{{$itemd[0]->image_url}}"  width="50px" height="50px">
            </div>
        </div>
    </div>
@endsection