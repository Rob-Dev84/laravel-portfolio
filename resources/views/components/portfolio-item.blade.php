<div
    x-data="{categories: {{ json_encode($categories) }} }"
    :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' " 
    class="w-full px-4 md:w-1/2 xl:w-1/3"
>

    <div class="relative mb-12">
        <a href="{{ $gitHub }}" target="_blank">
            <div class="overflow-hidden rounded-lg ease-in duration-100 hover:scale-105">
                <img
                    src="{{ $image }}"
                    alt="portfolio"
                    class="w-full h-[260px] object-cover"
                />
            </div>
        </a>
        <div
            class="dark:bg-slate-800 relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg h-[260px]"
          >
            <span class="text-primary mb-2 block text-sm font-semibold">
              {{ implode(", ", $categories) }}
            </span>
            <h3 class="text-dark mb-4 text-xl font-bold">
                {{ $title }}
            </h3>
            <x-button-link href="{{ $gitHub }}" variant="outline-primary">
                {{ _('View Details') }}
            </x-button-link>
          </div>
    </div>
  
</div>