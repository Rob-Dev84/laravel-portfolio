<x-call-to-action>
    <x-slot:title>
        <h4 class="text-white text-base font-semibold mb-2">
            {{ __("contactBanner.title") }}
        </h4>
        <p class="text-white font-bold text--3xl sm:text-[38px] leading-tight mb-6 sm:mb-8 lg:mb-0">
            {{ __("contactBanner.paragraph") }}
        </p>
    </x-slot>
        <x-button-link href="#contact" variant="dark" class="mr-3 mb-3 w-full text-center lg:w-auto">
            {{ __("contactBanner.button") }}
        </x-button-link>
</x-call-to-action>