@props(['type'=> 'info,' 'message'])


<div {{$attributes->merge(['class' => 'alert alert-'.$type])}}>
 {{$message}} </div>

 <ul>
    <li>
        whereStartsWith: {{$atributes->whereStartWith('data') }}
    </li>
    <li>
        whereDoesntStartWith: {{$atributes->whereDoesntStartWith('data') }}
    </li>
    <li>
        has: {{$atributes->has('class') }}
    </li>
    <li>
        get: {{$atributes->get('data') }}
    </li>
    <li>
        filter: {{$atributes->filter(fn(string $value, string $key) => $key == 'data-id') }}
    </li>
    
 </ul>