<form {{$attributes->class([
    'mortgage-calculator'
])}}>
    @csrf
    {{$slot}}
</form>
