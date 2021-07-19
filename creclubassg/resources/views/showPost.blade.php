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