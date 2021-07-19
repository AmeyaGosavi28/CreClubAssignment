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
    @foreach ($data["hits"] as $item)
        <div class="text-center">
            <img src={{$item['previewURL']}} width={{$item['webformatWidth']}} height={{$item['webformatHeight']}} />
        </div>
        @endforeach
        <div class="container">
            <form action="{{url('/user/favourite')}}" method="post">
                @csrf
                <input type="hidden" name="imgurl" value="{{$item['previewURL']}}" required/>
                <input type="hidden" name="id" value="{{$item['id']}}" required/>
                <label for="description"><b>Description</b></label>
                <input type="text" name="description" placeholder="Description Which You Want To Write" required/>
                <input type="submit" value="Add Fav" name="fav" />
                @error('imgurl')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                @error('description')
                    {{$message}}
                @enderror
            </form>
        </div>
  </body>    
