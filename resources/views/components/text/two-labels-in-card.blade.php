<div {{$attributes->class([
    'standart-two-lables'
])}}>
    <h4>{{$attributes->get('label')}}</h4>

    @isset($first)
    <h2>{{$first}}</h2>
    @endisset

    @isset($second)
    <span>{{$second}}</span>
    @endisset

    <h2>{{$slot}}</h2>

    @isset($tooltip)
    {{$tooltip}}
    @endisset
</div>
