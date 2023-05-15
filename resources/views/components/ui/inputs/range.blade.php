<div {{$attributes->class(['range'])}}>
    <label for="{{$attributes->get('name')}}">
        {{$attributes->get('label')}}
    </label>
    <div {{$attributes->class([
        'input'
    ])}}>
        <input type="range"
               id="{{$attributes->get('name')}}"
               name="{{$attributes->get('name')}}"
               min="{{$attributes->get('min')}}"
               max="{{$attributes->get('max')}}"
               value="{{$attributes->get('min')}}"
               placeholder="{{$attributes->get('min')}}"
        >
    </div>
</div>
