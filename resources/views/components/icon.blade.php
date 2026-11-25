@props(['name', 'class' => 'h-5 w-5'])
<svg {{ $attributes->merge(['class' => $class, 'fill' => 'none', 'viewBox' => '0 0 24 24', 'stroke-width' => '1.8', 'stroke' => 'currentColor', 'aria-hidden' => 'true']) }}>
    @switch($name)
        @case('calendar') <rect x="3" y="4" width="18" height="17" rx="3"/><path d="M16 2v4M8 2v4M3 10h18"/> @break
        @case('sparkles') <path d="m12 3-1.3 4.7L6 9l4.7 1.3L12 15l1.3-4.7L18 9l-4.7-1.3L12 3ZM19 15l-.7 2.3L16 18l2.3.7L19 21l.7-2.3L22 18l-2.3-.7L19 15Z"/> @break
        @case('chart') <path d="M4 19V5m0 14h17M8 16v-3m4 3V8m4 8v-6m4 6V4"/> @break
        @case('users') <circle cx="9" cy="8" r="3"/><path d="M3 20c.4-3.2 2.3-5 6-5s5.6 1.8 6 5M16 5.5a3 3 0 0 1 0 5.8M17 15c2.2.4 3.5 2 4 5"/> @break
        @case('user-round') <circle cx="12" cy="8" r="3"/><path d="M5 21a7 7 0 0 1 14 0"/> @break
        @case('clock') <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/> @break
        @case('wallet') <path d="M4 6.5A2.5 2.5 0 0 1 6.5 4H19v16H6a3 3 0 0 1-3-3V7a.5.5 0 0 1 .5-.5H19"/><path d="M16 13h3"/> @break
        @case('arrow-up-right') <path d="M7 17 17 7M8 7h9v9"/> @break
        @case('check') <path d="m5 12 4 4L19 6"/> @break
        @case('menu') <path d="M4 6h16M4 12h16M4 18h16"/> @break
        @case('x') <path d="m6 6 12 12M18 6 6 18"/> @break
        @case('sun') <circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.9 4.9l1.4 1.4m11.4 11.4 1.4 1.4M2 12h2m16 0h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/> @break
        @case('moon') <path d="M20.5 15.5A8.5 8.5 0 0 1 8.5 3.5a8.6 8.6 0 1 0 12 12Z"/> @break
        @case('plus') <path d="M12 5v14M5 12h14"/> @break
        @case('chevron-down') <path d="m6 9 6 6 6-6"/> @break
    @endswitch
</svg>
