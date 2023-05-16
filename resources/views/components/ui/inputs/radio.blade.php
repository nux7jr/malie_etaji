<div {{$attributes->class([
    'switch'
])}}>
    <label {{$attributes->class([
        'radio'
    ])}}
        for="{{$attributes->get('name')}}"></label>
    <input
        id="{{$attributes->get('name')}}"
        name="{{$attributes->get('name')}}"
        type="checkbox"
        title="choice"
        @isset($checked)checked="{{$attributes->get('checked')}}"@endisset
    >
</div>
