@extends('layouts.base')

@section('content')

    <h1>{{__('Ипотечный калькулятор')}}</h1>

    <x-calcus.form-mortgage-calculator>
        <div class="rename_left_side" style="flex-direction: column;display: flex;">
            <label for="mortgage">{{__('Специальная пограмма')}}</label>
            <x-ui.lists.dropdown id="mortgage" name="mortgage">
                    <?$some_options = [
                        'Господдержка',
                        'для IT-специалистов',
                        'для семей с детьми',
                        'военная ипотека'];
                    ?>
                    @foreach($some_options as $option)
                        <x-ui.lists.option value="{{$option}}">
                            {{$option}}
                        </x-ui.lists.option>
                    @endforeach
            </x-ui.lists.dropdown>
            <p>
                {{__('По программе можно:')}}
            </p>
            <x-ui.lists.ul-list>
                <li>
                    {{__('купить участок для строительства жилого дома')}}
                </li>
                <li>
                    {{__('самостоятельно или с подрядчиком построить жилой дом')}}
                </li>
            </x-ui.lists.ul-list>
        </div>
        <div class="rename_middle_side" style="flex-direction: column;display: flex;">
            middle content
        </div>
        <div class="rename_right_side" style="flex-direction: column;display: flex;">
            right content
        </div>
    </x-calcus.form-mortgage-calculator>
@endsection
