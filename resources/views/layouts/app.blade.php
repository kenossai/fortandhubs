<x-base-layout :title>
    <x-nav />
<div class="has-smooth" id="has_smooth"></div>
<div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper body-web-agency">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>
            <main>
                {{ $slot }}
            </main>
        <!-- rts footer two area wrapper -->
            <x-footer />
        <!-- rts footer two area wrapper end -->
        </div>
    </div>
</div>


</x-base-layout>

