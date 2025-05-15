@props(['title' => ''])
<x-base-layout :title>
    <x-nav />
    <x-header />
    {{ $slot }}
</x-base-layout>

