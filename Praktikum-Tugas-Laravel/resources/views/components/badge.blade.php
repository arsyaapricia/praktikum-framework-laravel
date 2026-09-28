@props(['status'])

@php
    $statusLower = strtolower($status);

    if ($statusLower === 'aman') {
        $classes = 'bg-green-100 text-green-800 border-green-300';
    } elseif ($statusLower === 'menipis') {
        $classes = 'bg-yellow-100 text-yellow-800 border-yellow-300';
    } elseif ($statusLower === 'habis') {
        $classes = 'bg-red-100 text-red-800 border-red-300';
    } else {
        $classes = 'bg-gray-100 text-gray-800 border-gray-300';
    }
@endphp

<span class="inline-block px-2.5 py-0.5 text-xs font-semibold rounded-full border {{ $classes }}">
    {{ ucfirst($status) }}
</span>
