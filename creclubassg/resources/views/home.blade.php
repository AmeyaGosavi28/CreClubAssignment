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
    <div class="container">
      <div class="row text-center">
        <div class="card-columns">
    @foreach ($data["hits"] as $item)
      <div class="card homecard">
        
        <img src={{$item['previewURL']}} width={{$item['imageWidth']}} height={{$item['imageHeight']}} class=" card-img img-fluid"/>
        <div class="addFav">
          <span>{{$item['tags']}}</span>
          <a href="{{ URL('/user/specificImg/'.$item['id'] )}}" class="btn btn-primary"><abbr title="Add To Favourite"><i class="fas fa-star"></i></abbr></a>
        </div>
      </div>  
    @endforeach
        </div>
      </div>
    </div>  
  </body>