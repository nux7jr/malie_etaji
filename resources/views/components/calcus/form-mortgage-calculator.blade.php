<form {{$attributes->class([
    'mortgage-calculator'
])}}>
    @csrf
    <div class="form__wrapper">{{$slot}}</div>
</form>
