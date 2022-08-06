{{-- Nothing in the world is as soft and yielding as water. --}}
<div
    class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
    <div class="md:flex-1 md:mr-10">
      <img src="dist/assets/mainLogo.jpg" class="mt-14 px-6 w-auto sm:px-0 sm:w-2/3 sm:mt-0 mb-7">
      <span class="block w-auto sm:w-5/6">
        👀 Link previews like in 💬 Telegram/Whatsapp/Notion, but as 🖼 images for use in any 📝 note taking tool ⟶ Ideal when you take plain text notes but want to remember videos, movies, games, websites more visually
      </span>
      <p class="mt-5 underline font-pt-serif font-secondary mb-4">
        Enter a complete URL so we can crawl through.
</p>
<div class="font-montserrat">
  <div class="md:flex-1 md:mr-10">
    <form wire:submit.prevent="searchURL">
      @error('url') <span class="block text-xs text-red-700 ">{{ $message }}</span> @enderror
      <input type="text" name="url" wire:model.lazy="url" class="w-2/3 p-4 mb-2 bg-secondary border-2 border-solid rounded-lg" placeholder="{{ \Illuminate\Foundation\Inspiring::quote() }}" @if(isset($result)) disabled @endif>
      <button type="submit" class="bg-black text-xl px-5 py-3 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2 @error('url') opacity-60 cursor-not-allowed @enderror" @error('result') disabled @enderror>
        Search 
      </button>
      <span class="inline animate-ping" wire:loading.delay.longer>⭕</span>
    </form>
    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
  </div>
  
  </div>
    </div>
    <div class="flex justify-center md:block mt-8 md:mt-0 md:flex-end">
      <div class="relative">
        <img src='dist/assets/Highlight1.svg' alt="" class="absolute -top-16 -left-10" />
      </div>
      <img class="animate-pulse justify-self-center @if($result) hidden @endif" src='dist/assets/search-animation.gif' alt="Macbook" />
      @if(isset($result))
      <div id="card" class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <span class="w-full block h-full">
        <img alt="blog photo" src="{{ $result['cover'] }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-secondary dark:bg-gray-800 w-full p-4">
          <p class="text-xs font-medium">
            {{$url}}
          </p>
          <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
            {{ $result['title'] }}
          </p>
          <p class="text-gray-400 dark:text-gray-300 font-light text-md">
            {{ $result['description'] }}
          </p>
          <div class="flex flex-wrap justify-starts items-center mt-4">
            <div data-tooltip-target="tooltip-default" onclick="takeshot()" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl transition duration-150 ease-in-out"
      data-bs-toggle="tooltip" title="Right click & save the image from next tab">
              #screenshot
            </div>
            <div wire:click="resetValues" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
              #reset
            </div>
            <a href="{{$url}}"  target="_blank" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                #visit
            </a>
            <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
              #{{ Carbon\Carbon::now()->format('H:i, d/m') }} UTC
            </div>
            </div>
          </div>
        </div>
      </span>
    </div>
  @endif
      <div id="howitworks" class="relative">
        <img src='dist/assets/Highlight2.svg' alt="" class="absolute -bottom-10 -right-0" />
      </div>
    </div>
  </div>