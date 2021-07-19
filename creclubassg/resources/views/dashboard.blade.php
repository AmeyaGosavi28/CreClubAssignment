@sectionMissing('header')
<div class="pull-right">
    @include('header')
</div>
@endif
  <body>
    @sectionMissing('navbar')
    <div class="pull-right">
        @include('navbar')
    </div>
    @endif
    <div class="container-fluid bg-light">
      <ul>
        <li><img src="{{asset('images/avtar.jpg')}}" width="100px" height="100px"/></li>
        <li><h3>{{session()->get('CRECLUB_USER_Name')}}</h3></li>
      </ul>  
    </div>
    <div class="col-12 text-center text-success"><h1>{{session('msg')}}</h1></div>
      <h1 class="text-center">Your Favourite</h1>
      <div class="container">
       
      <div class="card-deck">
        @foreach ($result as $item)
        <a href="{{ URL('/user/showPost/'.$item->image_id)}}"> 
          <div class="card" style="width: 18rem;">
            <img src={{$item->favimg}} class="card-img-top"/>
            <div class="card-body">
              <p class="card-text">{{$item->description}}</p>
            </div>
              <div class="dashicon">
                <a href="/user/edit/{{$item->image_id}}" class="btn btn-success mt-sm-3"><abbr title="Edit Favourite"><i class="fas fa-edit"></i></abbr></a>
                <a href="{{url('/user/delete/'.$item->image_id)}}" class="btn btn-danger mt-sm-3"><abbr title="Remove From Favourite"><i class="fas fa-trash-alt"></i></abbr></a>
              </div>  
          </div> 
        </a>   
        @endforeach
      </div>
      </div>
  </body>        

    