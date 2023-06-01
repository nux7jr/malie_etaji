@extends('layouts.base')

@section('head')
    @vite("resources/css/components/house_card.css")
@endsection

@section('content')
<section class="default__section">
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
            <h2 class="block__heading">{{__('Услуги снижающие ставку по ипотеке')}}</h2>
            <h4 class="m_padding">{{__('Выгода от снижения ставки - ')}}<span class="millions">1</span> <span class="thousands">500</span> <span class="hundreds">000</span> <span class="millions">₽</span> </h4>
            <div class="label_percents_toggle space__between">
                    <h4>{{__('Своя ставка')}}</h4>
                <div class="space__between">
                    <x-ui.inputs.radio name="toggle" checked="true"></x-ui.inputs.radio>
                    <h4 class="red_color">{{$percent = str_replace('.',',',(string)(-2.5 . '%'))}}</h4>
                </div>
            </div>
            <h4>{{__('Размер скидки, %')}}</h4>
            <div class="benefits">
                <x-ui.inputs.range
                    name="calcus_sale"
                    min="{{$min = 0}}"
                    max="{{$max = 2.5}}"
                ></x-ui.inputs.range>
                <div class="benefit">
                    <h4>
                        {{__('Выгода')}}
                    </h4>
                    <h4 class="red_color">
                        {{$benefit = '738 585 ₽'}}
                    </h4>
                </div>
                <div class="pricing">
                    <h4>
                        {{__('Стоимость')}}
                    </h4>
                    <h4 class="price">
                        {{$pricing = '114 750 ₽'}}
                    </h4>
                </div>
            </div>
            <h4 class="clarification">
                {{__('Услуга «Своя ставка» поможет снизить платежи по ипотеке на весь срок. Вы платите один раз, а экономите каждый месяц.')}}
            </h4>

            <hr>

            <div>
                <div class="label_percents_toggle space__between">
                    <h4>{{__('Страхование жизни и здоровья')}}</h4>
                    <div class="space__between">
                        <x-ui.inputs.radio name="save_life" checked="false" before="{{$percent = -1 . '%'}}"></x-ui.inputs.radio>
                        <h4 class="grayest">{{$percent = -1 . '%'}}</h4>
                    </div>
                </div>
                <h4 class="clarification">{{__('Будьте уверены, что при несчастном случае страховая выплата полностью компенсирует обязательства перед банком по ипотеке.')}}</h4>
            </div>

            <hr>

            <h4>{{__('Расчёт условий не является публичной офертой. Финальные условия кредитования определяются при заключении договора.')}}</h4>
        </div>
    </x-calcus.form-mortgage-calculator>
</section>
@endsection
