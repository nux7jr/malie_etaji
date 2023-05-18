@extends('layouts.base')

@section('head')
    @vite("resources/css/house_card.css")
@endsection

@section('content')
<section>
    <h1 class="section_heading">{{__('Ипотечный калькулятор')}}</h1>

    <x-calcus.form-mortgage-calculator>
        <div class="mortgage-calculator-left block">
            <h4><label for="mortgage">{{__('Специальная пограмма')}}</label></h4>
            <x-ui.lists.dropdown id="mortgage" name="mortgage">
                    <?php
                    $some_options = [
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
            <x-calcus.text-block class="calcus-left-text">
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
            </x-calcus.text-block>

            <x-ui.inputs.range
                name="price"
                min="{{$min = 1000000}}"
                max="{{$max = 10000000}}"
                label="{{__('Стоимость, ₽')}}"></x-ui.inputs.range>
            <x-ui.inputs.range
                name="start-payment"
                min="{{$min = 225000}}"
                max="{{$max = 1000000}}"
                percent="{{$percent = 15}}"
                label="{{__('Первоначальный взнос, ₽')}}"></x-ui.inputs.range>
            <x-ui.inputs.range
                name="loan-term"
                min="{{$min = 30}}"
                max="{{$max = 60}}"
                label="{{__('Срок кредита, лет')}}"></x-ui.inputs.range>
            <x-ui.buttons.button >
                {{__('Получить одобрение онлайн')}}
            </x-ui.buttons.button>
        </div>
        <div class="mortgage-calculator-middle block">
            <h2 class="block__heading">{{__('Стандартная ипотека')}}</h2>
            <x-text.two-labels-in-card
                label="{{__('Процентная ставка')}}"
                first="{{$first = '4,8%'}}"
                second="{{$second = '8,3%'}}"
                tooltip="{{__('Подсказка')}}">
            </x-text.two-labels-in-card>
            <x-text.two-labels-in-card
                label="{{__('Ежемесячный платеж')}}">
                <h2>{{$mount_payment = __('6 689 ₽')}}</h2>
            </x-text.two-labels-in-card>
            <x-text.two-labels-in-card
                label="{{__('Сумма кредита')}}">
                <h2>{{$credit_summary = __('1 275 000 ₽')}}</h2>
            </x-text.two-labels-in-card>
            <x-text.two-labels-in-card
                label="{{__('Налоговый вычет')}}"
                tooltip="{{__('Подсказка')}}">
                <h2>{{$tax = __('342 317 ₽')}}</h2>
            </x-text.two-labels-in-card>
            <x-text.two-labels-in-card
                label="{{__('Необходимый доход')}}"
                tooltip="{{__('Подсказка')}}">
                <h2>{{$needed_cash_flow = __('25 000 ₽')}}</h2>
            </x-text.two-labels-in-card>
        </div>
        <div class="mortgage-calculator-right block">
            right content
            <x-ui.inputs.radio name="toggle" checked="true"></x-ui.inputs.radio>
        </div>
    </x-calcus.form-mortgage-calculator>
</section>
@endsection
