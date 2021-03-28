@props(['colour' => 'purple'])
<a {{ $attributes->merge(['class' => "p-2 bg-{$colour} hover:bg-{$colour}-darkened text-white font-bold"]) }}>{{ $slot }}</a>
