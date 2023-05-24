@extends ("layouts.base")

@section('head')
{{-- @vite('resources/js/pages/home/home.js') --}}
{{-- @vite('resources/css/pages/home/home.css') --}}
@endsection

@section('content')
<section class="">
    <x-ui.path.path paths="{!! json_encode($paths) !!}">
    </x-ui.path.path>
    <div class="project-filter">
        <h1 class="project-filter__heading">Выбрать дом</h1>
        
    </div>
</section>
@endsection