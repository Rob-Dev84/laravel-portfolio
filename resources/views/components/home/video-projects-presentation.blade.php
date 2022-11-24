<section id="videos" class="dark:bg-slate-800 pt-24 pb-16">
  <div class="container">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="text-center mx-auto mb-[60px] max-w-[510px]">
          <h2 class="font-bold text-3xl text-dark dark:text-zinc-200 mb-4">
            {{ _("Video Projects Presentation") }}
          </h2>
          <p class="text-base text-body-color">
            {{ _("Explore more what I created") }}
          </p>
        </div>
      </div>
      
    </div>

    <div class="flex flex-wrap -mx-4">
      @foreach ($videoProjectsPresentation as $video)

        <x-video-projects-presentation-item :video-id="$video['videoId']" 
                                            :title="$video['title']"
                                            :description="$video['title']">
          
        </x-video-projects-presentation-item>
          
      @endforeach
    </div>

    <div class="flex justify-center">
      <x-button-link 
        href="#videos"
        {{-- target="_blank" --}}
        class="rounded-lg mt-10"
      >
        {{ _("View all videos") }}
      </x-button-link>
    </div>
       
  </div>
</section>
<!-- ====== Cards Section End -->
