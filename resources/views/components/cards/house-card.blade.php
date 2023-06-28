@push('head')
@once
@vite("resources/css/components/house_card.css")

@endonce
@endpush



<section class="mortgage-calc" id="mortgage-calc">
    <h1 class="section_heading">{{__('Ипотечный калькулятор')}}</h1>

    <x-calcus.form-mortgage-calculator>
        <div class="mortgage-calculator-left block">
            <h4><label for="mortgage">{{__('Специальная пограмма')}}</label></h4>
            <x-ui.lists.dropdown id="mortgage" name="mortgage">
                <?php
                    $some_options = [
                        ['name'=>'Господдержка','percent'=>7.3],
                        ['name'=>'для IT-специалистов','percent'=>5.0],
                        ['name'=>'для семей с детьми','percent'=>5.3],
                        ['name'=>'сельская ипотека','percent'=>3.0]];
                    ?>
                @foreach($some_options as $option)
                <x-ui.lists.option value="{{$option['name']}}" percent="{{$option['percent']}}">
                    {{$option['name']}}
                </x-ui.lists.option>
                @endforeach
            </x-ui.lists.dropdown>

            <x-ui.inputs.range name="price" min="{{$min = 1000000}}" max="{{$max = 10000000}}"
                label="{{__('Стоимость, ₽')}}"></x-ui.inputs.range>
            <x-ui.inputs.range name="start-payment" min="{{$min = 225000}}" max="{{$max = 1000000}}"
                percent="{{$percent = 15}}" label="{{__('Первоначальный взнос, ₽')}}"></x-ui.inputs.range>
            <x-ui.inputs.range name="loan-term" min="{{$min = 10}}" max="{{$max = 30}}"
                label="{{__('Срок кредита, лет')}}"></x-ui.inputs.range>
            <x-ui.buttons.button data-additional_form="mortgage-forms" data-modal_id="modal__income"
                data-ym="calculator_ipoteka" type='button'>
                {{__('Получить одобрение онлайн')}}
            </x-ui.buttons.button>
        </div>
        <div class="mortgage-calculator-middle block">
            <h2 class="block__heading">{{__('Стандартная ипотека')}}</h2>
            <x-text.two-labels-in-card id="percents" label="{{__('Процентная ставка')}}" first="{{$first = '4,8%'}}"
                second="{{$second = '8,3%'}}" tooltip="{{__('Подсказка')}}">
            </x-text.two-labels-in-card>
            <x-text.two-labels-in-card label="{{__('Ежемесячный платеж')}}">
                <h2 id="calc-month-pay">{{$mount_payment = __('6 689 ₽')}}</h2>
            </x-text.two-labels-in-card>
            <x-text.two-labels-in-card label="{{__('Сумма кредита')}}">
                <h2 id="calc-full-price">{{$credit_summary = __('1 275 000 ₽')}}</h2>
            </x-text.two-labels-in-card>
            <x-text.two-labels-in-card label="{{__('Налоговый вычет')}}" tooltip="{{__('Подсказка')}}">
                <h2 id="tax">{{$tax = __('342 317 ₽')}}</h2>
            </x-text.two-labels-in-card>
        </div>
        <div class="mortgage-calculator-right block">
            <h2 class="block__heading">{{__('Хочешь свою ставку?')}}</h2>

            <h4 class="m_padding">{{__('Выгода от снижения ставки - ')}}<span class="millions">до
                    2&nbsp;000&nbsp;000&nbsp;</span><span class="millions">₽</span> </h4>

            <div>
                <div class="label_percents_toggle space__between">
                    <h4>{{__('Страхование жизни и здоровья')}}</h4>
                    <div class="row__reverse">
                        <x-ui.inputs.radio name="save_life" checked="false" before="{{$percent = -1 . '%'}}">
                        </x-ui.inputs.radio>
                        <h4 class="grayest">{{$percent = -1 . '%'}}</h4>
                    </div>
                </div>
                <h4 class="clarification">{{__('Будьте уверены, что при несчастном случае страховая выплата полностью
                    компенсирует обязательства перед банком по ипотеке.')}}</h4>
            </div>

            <hr>

            <div class="self__benefits">
                <div class="self__benefits space__between">
                    <h4 class="small__heading">{{__('Своя ставка')}}</h4>
                    <h4 class="small__heading red_color">{{__('до 2,5% от базовой ставки')}}</h4>
                </div>
                <h4 class="clarification">
                    {{__('Услуга «Своя ставка» поможет снизить платежи по ипотеке на весь срок. Вы платите один раз, а
                    экономите каждый месяц. ')}}
                </h4>
                <h4 class="black__heading">
                    {{__('Конечный расчет по ипотеке с услугой “Своя ставка” вы можете узнать у ипотечного брокера
                    “Малые этажи”')}}
                </h4>
            </div>

            <hr>

            <h4>{{__('Расчёт условий не является публичной офертой. Финальные условия кредитования определяются при
                заключении договора.')}}</h4>
        </div>
    </x-calcus.form-mortgage-calculator>
</section>