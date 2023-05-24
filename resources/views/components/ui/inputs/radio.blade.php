<div
     @isset($checked)
         @if($checked === 'true')
             {{$checked}}
             {{$attributes->class(['switch','active'])}}

         @else
             {{$attributes->class([
                'switch'
            ])}}
         @endif
    @endisset
>
    <label {{$attributes->class([
        'radio'
    ])}}
        for="{{$attributes->get('name')}}"
    ></label>
    <input
        id="{{$attributes->get('name')}}"
        name="{{$attributes->get('name')}}"
        type="checkbox"
        title="choice"
        @isset($before)
            data-before="{{$before}}"
        @endisset
        @isset($checked)
            @if($checked === 'true')
                checked
            @endif
        @endisset
    >
</div>
