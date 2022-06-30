@extends('layouts.nav')
@section('content')
{{-- <style>
  .cont{
    margin-bottom: 100%;
  }
</style> --}}
<div class="cont mt-4">
  <div class="carousel-inner">
  <div class="carousel-item active">
    @if($searched_result ?? '')
     <div class="row">
      <h2 class="row offset-1">Found Items</h2>
      <form class="form" method="GET" action="/search">
        <div class="row form-group ml-2" style="margin-bottom: 1%">
            <input class="form-control offset-1 col-md-2 w-50 mr-2 " type="search" placeholder="Search" aria-label="Search" name="item" >
            <button class="btn btn-primary form-control  col-md-2 w-25" type="submit">Search</button>
        </div>
   
    </form>
     </div>
     <div class="row col-md-10 m-auto">
          @foreach($searched_result ?? '' as $item)
          <div class="row offset-1 m-4" style="background-color: white; padding: 2%; border-radius: 2%">
            <div class="col-md-4">
              <p class="">{{$item->itemname}}</p>
              <p class="">{{$item->description}}</p>
              <a href="/view/{{$item->id}}"><button class="btn btn-primary col-md-3">View More</button></a>
            </div>
            <div class="row col-md-7">
                <img src="images/{{$item->image_url}}" width="50px" height="50px">
            </div>
          </div>
          @endforeach
     </div>
        </div>
      </div>
        @elseif($itemss)
        <div class="row">
          <h2 class="row offset-1">Found Items</h2>
          <form class="form" method="GET" action="/search">
            <div class="row form-group ml-2" style="margin-bottom: 1%">
                <input class="form-control offset-1 col-md-2 w-50 mr-2 " type="search" placeholder="Search" aria-label="Search" name="item" >
                <button class="btn btn-primary form-control  col-md-2 w-25" type="submit">Search</button>
            </div>
       
        </form>
         </div>
         <div class="row col-md-10 m-auto">
              @foreach($itemss as $item)
              <div class="row offset-1 m-4" style="background-color: white; padding: 2%; border-radius: 2%">
                <div class="col-md-4">
                  <p class="">{{$item->itemname}}</p>
                  <p class="">{{$item->description}}</p>
                  <a href="/view/{{$item->itemid}}"><button class="btn btn-primary col-md-3">View More</button></a>
                </div>
                <div class="row col-md-7">
                    <img src="images/{{$item->image_url}}" width="50px" height="50px">
                </div>
              </div>
              @endforeach
         </div>
            </div>
          </div>
          @else
        <div class="row col-md-8 justify-content-center m-auto" style="text-align: center;">
           <h2>
          Hi Sorry We could not find anything of that nature, you might want to try to search with other keyword!!
        </h2>
        </div>
       
        <form class="form" method="GET" action="/search">
          <div class="row form-group ml-2" style="margin-bottom: 10%">
              <input class="form-control offset-1 col-md-2 w-50 mr-2 " type="search" placeholder="Search" aria-label="Search" name="item" >
              <button class="btn btn-primary form-control  col-md-2 w-25" type="submit">Search</button>
          </div>
     
      </form>
        @endif
     </div>
@endsection

    
