@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/projects/projects.js')
@vite('resources/css/pages/projects/projects.css')
@endsection

@section('content')
<section class="">
    <x-ui.path.path paths="{!! json_encode($paths) !!}">
    </x-ui.path.path>
    <div class="project-filter">
        <h1 class="project-filter__heading">Выбрать дом</h1>
        <div class="project-filter__wrapper">
            <div class="project-input">
                <label for="house-list">Линейка домов</label>
                <x-ui.lists.dropdown class="house-list__dropdown" id="house-list" name="house-list">
                    <?php
                $house_setting = [
                    'Не выбрано',
                    'Дом 2',
                    'Дом 3',
                    'Дом 4'];
                ?>
                    @foreach($house_setting as $option)
                    <x-ui.lists.option value="{{$option}}">
                        {{$option}}
                    </x-ui.lists.option>
                    @endforeach
                </x-ui.lists.dropdown>
            </div>
            {{-- price --}}
            <div class="project-input">
                <p>Стоимость, млн ₽</p>
                <div class="project-input__rangees">
                    <div class="rangees__inner">
                        от
                        <div class="formatting-end">
                        </div>
                    </div>
                    —
                    <div class="rangees__inner">
                        до
                        <div class="formatting-start">
                        </div>
                    </div>
                </div>
                <div class="rangees"></div>
            </div>
            <div class="project-input">
                <label for="square">Площадь, м2</label>
                <x-ui.inputs.x-input class="square-input" id="square" placeholder="До">
                </x-ui.inputs.x-input>
            </div>
            <div class="project-input">
                <label for="floors">Кол-во этажей</label>

            </div>
        </div>
    </div>
</section>
@endsection