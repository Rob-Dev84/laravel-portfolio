<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="-mx-4 flex flex-wrap items-center justify-between">
          <div class="w-full px-4 lg:w-6/12">
            <div class="-mx-3 flex items-center sm:-mx-4">
              <div class="w-full px-3 sm:px-4 xl:w-1/2">
                <div class="py-3 sm:py-4">
                  <img
                    src="https://cdn.tailgrids.com/1.0/assets/images/services/image-1.jpg"
                    {{-- src="/img/RobertoManna.png" --}}
                    alt=""
                    class="w-full rounded-2xl"
                  />
                </div>
                <div class="py-3 sm:py-4">
                  <img
                    src="https://cdn.tailgrids.com/1.0/assets/images/services/image-2.jpg"
                    {{-- src="/img/RobertoManna.png" --}}
                    alt=""
                    class="w-full rounded-2xl"
                  />
                </div>
              </div>
              <div class="w-full px-3 sm:px-4 xl:w-1/2">
                <div class="relative z-10 my-4">
                  <img
                    src="https://cdn.tailgrids.com/1.0/assets/images/services/image-3.jpg"
                    {{-- src="/img/RobertoManna.png" --}}
                    alt=""
                    class="w-full rounded-2xl"
                  />

                  <x-about-dots></x-about-dots>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
            <div class="mt-10 lg:mt-0">
              <span class="text-primary mb-2 block text-lg font-semibold">
                <blockquote 
                    cite="https://www.brainyquote.com/quotes/carl_friedrich_gauss_319898"
                    class="text-sm text-zinc-300 italic py-2 px-3 border-l-4 border-amber-500"
                >
                    {{ __("about.quote") }}
                </blockquote>
                <figcaption>{{ _("Carl Friedrich Gauss") }}</figcaption>
              </span>
              <h2 class="dark:text-zinc-100 mb-8 text-3xl font-bold sm:text-4xl">
                {{ __("about.title") }}
              </h2>
              <p class="dark:text-zinc-300 mb-8 text-base">
                {{ __("about.paragraph") }}
                <span class="text-amber-500 font-bold">
                {{ __('Laravel') }}
                </span>
              </p>
              <x-button-link href="#portfolio" variant="red">
                {{ __("about.button") }}
              </x-button-link>
            </div>
          </div>
        </div>
      </div>

</section>