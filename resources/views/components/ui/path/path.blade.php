@push('head')
@once
@vite('resources/css/components/path.css')
@endonce
@endpush

  <div class="path__wrapper">
    @foreach (json_decode($paths, true) as $item)
    <a class="path__link" href="{{ $item["path"] }}">{{$item["name"]}}</a>
    @endforeach
  </div>