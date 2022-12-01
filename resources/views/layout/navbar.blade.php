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
                <a href="{{ route('home', request()->segment(1)) }}"  class="w-full flex items-center py-2">
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
                        {{ 'Roberto Manna' }}
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
                        
                        <div x-data="{dropdownMenu: false}" class="relative">
                            <!-- Dropdown toggle button -->
                            <button @click="dropdownMenu = ! dropdownMenu" class="flex items-center p-2 py-2 text-zinc-800 dark:text-zinc-200 lg:ml-6 xl:ml-12">
                                
                                @php
                                    $selectedlanguage =  Config::get('languages')[App::getLocale()];
                                @endphp
                                {{-- <span class="mr-4">{{ __("navbar.Config::get('languages')[App::getLocale()]") }} </span> --}}
                                <span class="mr-4">{{ __("navbar.$selectedlanguage") }} </span>

                                <svg width="12" height="7" viewBox="0 0 12 7" class="fill-current ml-2">
                                    <path
                                      d="M0.564864 0.879232C0.564864 0.808624 0.600168 0.720364 0.653125 0.667408C0.776689 0.543843 0.970861 0.543844 1.09443 0.649756L5.82517 5.09807C5.91343 5.18633 6.07229 5.18633 6.17821 5.09807L10.9089 0.649756C11.0325 0.526192 11.2267 0.543844 11.3502 0.667408C11.4738 0.790972 11.4562 0.985145 11.3326 1.10871L6.60185 5.55702C6.26647 5.85711 5.73691 5.85711 5.41917 5.55702L0.670776 1.10871C0.600168 1.0381 0.564864 0.967492 0.564864 0.879232Z"
                                    />
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M1.4719 0.229332L6.00169 4.48868L10.5171 0.24288C10.9015 -0.133119 11.4504 -0.0312785 11.7497 0.267983C12.1344 0.652758 12.0332 1.2069 11.732 1.50812L11.7197 1.52041L6.97862 5.9781C6.43509 6.46442 5.57339 6.47872 5.03222 5.96853C5.03192 5.96825 5.03252 5.96881 5.03222 5.96853L0.271144 1.50833C0.123314 1.3605 -5.04223e-08 1.15353 -3.84322e-08 0.879226C-2.88721e-08 0.660517 0.0936127 0.428074 0.253705 0.267982C0.593641 -0.0719548 1.12269 -0.0699964 1.46204 0.220873L1.4719 0.229332ZM5.41917 5.55702C5.73691 5.85711 6.26647 5.85711 6.60185 5.55702L11.3326 1.10871C11.4562 0.985145 11.4738 0.790972 11.3502 0.667408C11.2267 0.543844 11.0325 0.526192 10.9089 0.649756L6.17821 5.09807C6.07229 5.18633 5.91343 5.18633 5.82517 5.09807L1.09443 0.649756C0.970861 0.543844 0.776689 0.543843 0.653125 0.667408C0.600168 0.720364 0.564864 0.808624 0.564864 0.879232C0.564864 0.967492 0.600168 1.0381 0.670776 1.10871L5.41917 5.55702Z"
                                    />
                                </svg>
                            </button>
                            <!-- Dropdown list -->
                            <div x-show="dropdownMenu" class="absolute right-0 py-2 mt-2 dark:bg-zinc-100 bg-zinc-900 dark:text-zinc-700 text-white rounded shadow-xl w-44">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a href="{{ route('lang.switch', $lang) }}" class="block px-4 py-2 
                                        text-sm 
                                        {{-- dark:text-zinc-800 dark:bg-zinc-100 text-zinc-200 hover:bg-zinc-900 hover:text-zinc-300 --}}
                                        ">
                                            {{ __("navbar.$language") }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>


                    </ul>

                    


                    

                    </nav>
                </div>
            </div>
        </div>
        
    </div>
</header> 
{{-- Navbar end --}}