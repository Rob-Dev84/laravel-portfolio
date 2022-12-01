<div class="relative pt-[60px] lg-pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-5/12 px-4">
                <div class="hero-content">
                    <h1
                        class="text-dark dark:text-zinc-100 font-bold text-4xl sm:text-[42px] lg:text-[40] xl_text-[42px] leading-snug mb-6"
                    >
                        {{ __("hero.welcome") }} 
                    </h1>
                    <p class="dark:text-zinc-300 mb-8 text-base mb-8 max-w-[520px]">
                        {{ __('hero.title') }}
                        <br>
                        {{ __('hero.paragraph') }}
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                                {{ __('hero.button') }}
                            </x-button-link>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="font-normal text-xs flex items-center text-body-color dark:zinc-300 mb-4">
                            {{ __('hero.socialMedia') }}
                            <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
                        </h6>
                        <x-social-icons></x-social-icons>
                    </div>
                </div>
            </div>

            


            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                  <div class="relative z-10 inline-block pt-11 lg:pt-0">
                    {{-- <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/hero/hero-image-01.png" alt="hero" class="max-w-full lg:ml-auto"> --}}
                    <img src="/img/robertoMannaPc.jpg" alt="hero" class="max-w-full lg:ml-auto rounded-tl-3xl">
                    <span class="absolute -left-8 -bottom-8 z-[-1]">
                      <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                        <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                      </svg>
                    </span>
                  </div>
                </div>
            </div>
            
        </div>
    </div>
</div>