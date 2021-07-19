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
        <div class="container text-center">
            <div class="text-center"><h1>Edit Favourite List</h1></div>
            <img src={{$result['0']->favimg}} />
            <form action="{{url('/user/update/'.$result['0']->favid)}}" method="post">
                @csrf
                <label for="description"><b>Description</b></label>
                <input type="text" name="description" placeholder="Description Which You Want To Write" value="{{$result['0']->description}}" required/>
                <input type="submit" value=" Add Fav" name="fav" />
            </form>                
        </div>
        <div class="container">
            @error('imgurl')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                @error('description')
                    {{$message}}
                @enderror
        </div>
  </body>    
