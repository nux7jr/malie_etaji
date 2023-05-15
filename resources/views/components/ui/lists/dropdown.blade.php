{{--{{dd($attributes)}}--}}
<select name={{$attributes->get('name')}} id={{$attributes->get('id')}}>
    {{$slot}}
</select>
