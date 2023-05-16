<div {{$attributes->class([
    'standart-two-lables'
])}}>
    <h4>{{$attributes->get('label')}}</h4>

    <div>
        @isset($first)
        <h2>{{$first}}</h2>
        @endisset

        @isset($second)
        <span>{{$second}}</span>
        @endisset

        <h2>{{$slot}}</h2>

        @isset($tooltip)
            <a class="htooltip" rel="nofollow">
                <img src="/images/icons/tooltip_question.svg" title="{{$tooltip}}"/>
            </a>
        @endisset
    </div>
</div>
