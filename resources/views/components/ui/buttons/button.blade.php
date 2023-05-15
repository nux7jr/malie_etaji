<button {{$attributes->class([
    'default__button'
])}} type="{{$attributes->get('type')}}" >
    {{ $slot }}
</button>
