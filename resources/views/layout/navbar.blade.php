{{-- Navbar start --}}
<header
    x-data="{ navbarOpen: false }"
    class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between 
        {{-- relative --}}
        ">
            <div class="pr-4 w-96 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    {{-- <img 
                        src="{{ url('/img/logo.png') }}" 
                        alt="logo"
                        class="w[48px] lg:w-[64px] inline-block dark:hidden"
                    >
                    <img 
                        src="{{ url('/img/logo-white.png') }}" 
                        alt="logo"
                        class="w[48px] lg:w-[64px] hidden dark:inline-block"
                    > --}}
                
                    <span class="text-xl xl:text-xl font-bold text-[#0c7187] dark:text-white pl-4">
                        {{-- &lt; --}}
                        {{ 'Roberto Manna' }}
                        {{-- &#47;&gt; --}}
                    </span>
                </a>
            </div>
        
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-layout.navbar-hamburger></x-layout.navbar-hamburger>
                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow-lg w-full dark:bg-slate-900 dark:text-zinc-900 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
                    >
                    <ul class="block lg:flex lg:items-center">
                        @foreach ($navigationItems as $item)
                            <x-layout.navbar-item
                                :href="$item['href']"  
                            >
                            {{ $item['label'] }}
                            </x-layout.navbar-item>
                        @endforeach
                        <div class="lg:ml-6 xl:ml-12 inline-flex">
                            <svg class="w-5 mr-1 text-sm font-medium text-zinc-800 dark:text-zinc-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" ><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <label class="inline-flex relative items-center cursor-pointer ">
                                <input  x-on:click="dark = ! dark" type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-zinc-100 rounded-full peer dark:bg-zinc-600 peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-zinc-200 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-zinc-500 peer-checked:bg-blue-600"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-1 text-sm font-medium text-zinc-800 dark:text-zinc-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>
                            </label>
                        </div>
                    </ul>
                    

                    </nav>
                </div>
            </div>
        </div>
        
    </div>
</header> 
{{-- Navbar end --}}