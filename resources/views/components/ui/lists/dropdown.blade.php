<div {{$attributes->class(['custom-select-dropdown'])}}>
    <select name={{$attributes->get('name')}} id={{$attributes->get('id')}}>
        {{$slot}}
    </select>
</div>