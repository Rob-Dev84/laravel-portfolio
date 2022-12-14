<button
    {{ $attributes->merge(['id' => 'navbarToggler', 'class' => 'block absolute right-4 px-3 py-[6px] rounded-lg top-1/2 -translate-y-1/2 ring-primary focus:ring-2 lg:hidden']) }}
    @click="navbarOpen = !navbarOpen"
    :class="navbarOpen && 'navbarTogglerActive' "
    {{-- id="navbarToggler" --}}
    {{-- class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden" --}}
    >
    <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
    <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
    <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
</button>