<!-- ====== Footer Section Start -->
<footer class="relative z-10 bg-zinc-200 dark:bg-zinc-800 pt-20 pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap justify-between">
            <span class="inline-flex items-center text-xl">
                {{ __('footer.socialMedia') }}
            </span>
            <x-social-icons class="mb-0"></x-sacial-icons>
        </div>
        <div class="flex justify-center">
            <div>
                &copy; {{ date('Y'); }} {{ __('footer.copyright') }}
            </div>
        </div>
    </div>
    
    {{-- <div>
        <span class="absolute left-0 z-[-1]"></span>
    </div> --}}
  </footer>
  <!-- ====== Footer Section End -->
  