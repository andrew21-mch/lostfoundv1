@extends('layouts.nav')
@section('content')
<div class="cont mt-4">
  <div class="carousel-inner">
  <div class="carousel-item active">
    <?php if($searched_result ?? ''): ?>
     <div class="row offset-1">
      <h2>Found Items</h2>
     </div>
     <div class="row col-md-10 m-auto">

          @foreach($searched_result ?? '' as $item)
          <div class="row offset-1 m-4" href="/">
            <div class="col-md-4">
              <p class="">{{$item->name}}</p>
              <p class="">{{$item->description}}</p>
              <a href="/"><button class="btn btn-primary">View More</button></a>
            </div>
            <div class="col-md-7">
              <img class="d-block w-100 image-blurred" src="images/{{$item->image_url}}.jpeg" alt="Second slide" style="height: 300px">
            </div>
            
          
          </div>
        
          @endforeach
        </div>
      </div>
        @else
        <div class="row col-md-8 justify-content-center" style="text-align: center;">
           <h2>
          Hi Sorry We could not find anything of that nature, you might want to try to search with other keyword!!
        </h2>
        </div>
       
        @endif
     </div>
     
    
        <form class="form" method="GET" action="/search">
            <div class="row form-group ml-2" style="margin-bottom: 10%">
                <input class="form-control offset-1 col-md-2 w-50 mr-2 " type="search" placeholder="Search" aria-label="Search" name="item" >
                <button class="btn btn-primary form-control  col-md-2 w-25" type="submit">Search</button>
            </div>
       
        </form>
    </div>
</div>
@endsection

    
