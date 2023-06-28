<form {{$attributes->class([
    'mortgage-calculator'
    ])}} id='mortgage-forms'>
    @csrf
    <div class="form__wrapper">{{$slot}}</div>
</form>