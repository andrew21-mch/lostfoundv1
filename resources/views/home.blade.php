@extends('layouts.nav')
@section('content')
<div class="cr">
  <div class="row justify-content-center m-5">
    <p class="m-auto" style="text-align: center">Welcome to Lost And Found
    A platform where you can easily find your lost items and report lost Items
 </p> 
    <button class="btn btn-danger col-md-3 mt-3" style="background-color: rgba(42, 127, 79, 0.655); border-color: transparent">Find</button>
  </div>
<div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    
      @if($items)
      <div class="carousel-inner">
      @foreach($itemss as $item)
      <div class="carousel-item active">
        <img class="d-block w-75 m-auto" src="images/{{$item->image_url}}"src="{{URL::asset('images/3.jpeg')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Name</h5>
          <p>Description</p>
        </div>
      </div>
      
      @endforeach
    </div>
      @else

      <div class="carousel-item active">
        <img class="d-block w-100" src="{{URL::asset('images/4.jpeg')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black">Name</h5>
          <p>Description</p>
        </div>
      </div>
    </div>
    @endif
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



@endsection