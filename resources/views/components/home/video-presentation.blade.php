<x-call-to-action>
    <x-slot:title>
        <h4 class="text-white text-base font-semibold mb-2">
            {{ _("Check my videos") }}
        </h4>
        <h2 class="text-white font-bold text--3xl sm:text-[38px] leading-tight mb-6 sm:mb-8 lg:mb-0">
            {{ _("Here you can understand more about me") }}
        </h2>
    </x-slot>
        <x-button-link href="" variant="dark" class="mr-3 mb-3 w-full text-center lg:w-auto" target="_blank">
            {{ _("View video") }}
        </x-button-link>
        <x-button-link href="https://github.com/Rob-Dev84" variant="red" class="mr-3 mb-3 w-full text-center lg:w-auto" target="_blank">
            {{ _("View my GitHub") }}
        </x-button-link>
    
</x-call-to-action>