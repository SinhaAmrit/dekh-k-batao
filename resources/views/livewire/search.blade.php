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
      <input type="text" name="url" wire:model.lazy="url" class="w-2/3 p-4 mb-2 bg-secondary border-2 border-solid rounded-lg" placeholder="{{ \Illuminate\Foundation\Inspiring::quote() }}" @if(isset($preview)) disabled @endif>
      <button type="submit" class="bg-black text-xl px-5 py-3 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2 @error('url') opacity-60 cursor-not-allowed @enderror" @error('preview') disabled @enderror>
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
      <img class="animate-pulse justify-self-center @if($preview) hidden @endif" src='dist/assets/search-animation.gif' alt="Macbook" />
      @if(isset($preview['url']))
      <div id="card" class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <span href="{{$preview['url']}}" class="w-full block h-full">
          <img alt="opps! No cover image to show 😢" src="{{ $preview['image']['url']}}" class="max-h-40 w-full object-cover"/>
          <div class="bg-white dark:bg-gray-800 w-full p-4">
            <div class="flex items-center">
              @if(isset($data['icon']['url']))
              <a href="#" class="block relative">
                <img alt="profil" src="{{$data['icon']['url']}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
              </a>
              @endif
              <div class="flex flex-col ml-2 justify-between">
              <span class="font-semibold text-indigo-500 text-sm">
                {{$data['name']}} 
                <span class="text-xs">({{$data['domain']}}) </span>
              </span>
              <span class="dark:text-gray-400 text-xs flex items-center">
                Size: @if(isset($data['size'])) {{$data['size']}} @else -- @endif KB @if(isset($data['redirected']) && $data['redirected'] == true)| redirected URL @endif @if(isset($data['trackersDetected']) && $data['trackersDetected'] == true)| Trackers Detected @endif
              </span>
              </div>
            </div>
            <hr>
            <span class="flex w-full mx-auto mb-4 text-xs">
                @if(isset($data['details']['viewCount'])) 
                  {{$data['details']['viewCount']}} Views, 
                @endif 
                @if(isset($data['details']['likeCount']))
                  {{$data['details']['likeCount']}} Likes,
                @endif 
                @if(isset($data['details']['commentCount']))
                  {{$data['details']['commentCount']}} Comments
                @endif
              </span>
            <p class="text-gray-800 underline dark:text-white text-xl font-medium mb-2">
              {{$data['title']}}
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
              {{$data['description']}}
            </p>
            <!-- Tags Section -->
            <div class="flex flex-wrap justify-starts items-center mt-4">
              <div  wire:click="resetValues" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                #reset
              </div>
              <div data-tooltip-target="tooltip-default" onclick="takeshot()" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl transition duration-150 ease-in-out" data-bs-toggle="tooltip" title="Right click & save the image from next tab">
                #screenshot
              </div>
              <a href="{{$url}}"  target="_blank" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                #visit
              </a>
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