@props([
    'route',
    'text'
])

<li>
    <a href={{ $route }} class="menu-item">
        {{ $slot }}
        <span class="menu-item_text">{{ $text }}</span>
     </a>
</li>
