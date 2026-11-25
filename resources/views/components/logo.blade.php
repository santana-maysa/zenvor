@props(['compact' => false])
@if($compact)
    <span {{ $attributes->merge(['class' => 'brand-mark']) }}>Z</span>
@else
    <span {{ $attributes->merge(['class' => 'brand-wordmark']) }}>zenvor<span>.</span></span>
@endif
