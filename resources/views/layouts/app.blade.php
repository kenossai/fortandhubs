<x-base-layout :title>
    <x-mobile-menu />
    <x-header />
<div id="smooth-wrapper">
    <div id="smooth-content" class="body-padding">

        <main>
            {{ $slot }}
        </main>
        <x-footer />
    </div>
</div>
</x-base-layout>

