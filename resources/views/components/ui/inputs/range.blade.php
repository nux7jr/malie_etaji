<div {{$attributes->class(['range'])}}>
    @isset($label)
    <h4>
        <label>
            {{$attributes->get('label')}}
        </label>
    </h4>
    @endisset
    <div {{$attributes->class([
        'input'
    ])}}>
        <div {{$attributes->class(['space__between'])}}>
            <h4 for="{{$attributes->get('name')}}">
                {{str_replace(',', ' ',number_format($attributes->get('min')))}}
            </h4>
            @isset($percent)
            <h4 {{$attributes->class(['percent'])}}>
                {{$attributes->get('percent')}}%
            </h4>
            @endisset
        </div>
        <div class="width"></div>
        <input type="range"
           id="{{$attributes->get('name')}}"
           name="{{$attributes->get('name')}}"
           min="{{$attributes->get('min')}}"
           max="{{$attributes->get('max')}}"
           value="{{$attributes->get('min')}}"
           placeholder="{{$attributes->get('min')}}"
           step="{{((float)$attributes->get('max') - (float)$attributes->get('min'))/100}}"
{{--           oninput="rangeValue.innerText = this.value"--}}
        >
    </div>
</div>
