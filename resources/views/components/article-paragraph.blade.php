@props(['body', 'full' => false])

@php

if($full){
    $classes = "text-sm leading-6 text-gray-600";

}else{

    $classes = "text-sm leading-6 text-gray-600 mt-5 line-clamp-1";
}

@endphp
<p class="{{ $classes }}">{{ $body }}</p>
