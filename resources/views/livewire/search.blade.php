{{-- Nothing in the world is as soft and yielding as water. --}}
<div
    class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
    <div class="md:flex-1 md:mr-10">
      <img src="dist/assets/mainLogo.jpg" class="mt-14 px-6 w-auto sm:px-0 sm:w-2/3 sm:mt-0 mb-7">
      <span class="block w-auto sm:w-5/6">
        We magically preview any link 😉
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
          <div class="alert alert-error">
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
      <img class="animate-pulse justify-self-center @if(isset($data['url']) || isset($data['detail'])) hidden @endif" src='dist/assets/search-animation.gif' alt="Macbook" />
      @if(isset($data['url']) && !isset($data['detail']))
      <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <span href="{{$data['url']}}" class="w-full block h-full">
          @if(isset($data['image']['url']))
          <img alt="opps! No cover image to show 😢" src="{{ $data['image']['url']}}" class="max-h-40 w-full object-cover"/>
          @endif
          <div id="card" class="bg-white dark:bg-gray-800 w-full p-4">
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
              @if(isset($data['size']))  Size: {{$data['size']}} Bytes @endif @if(isset($data['redirected']) && $data['redirected'] == true) Redirected URL @endif @if(isset($data['trackersDetected']) && $data['trackersDetected'] == true) Trackers Detected @endif
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
      @if(isset($data['detail']))
      
<div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800 w-64 m-auto">
    <div class="w-full h-full text-center">
        <div class="flex h-full flex-col justify-between">
<svg class="h-12 w-1/4 my-4 m-auto text-green-500" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 460.775 460.775" style="enable-background:new 0 0 460.775 460.775;" xml:space="preserve">
<path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55
	c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55
	c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505
	c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55
	l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719
	c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
            <span class="text-gray-800 dark:text-white font-bold">
              Link Cannot Be Previewed!
            </span>
            <p class="text-gray-600 dark:text-gray-100 text-md py-2 px-6 text-justify">
              {!! Str::words($data['detail'], 20, ' ...') !!}
            </p>
            <div class="flex items-center justify-between gap-4 w-full mt-8">
                <button wire:click="resetValues" type="button" class="py-2 px-4  bg-black focus:ring-black-500 focus:ring-offset-indigo-200 text-secondary w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
      @endif
      <div id="howitworks" class="relative">
        <img src='dist/assets/Highlight2.svg' alt="" class="absolute -bottom-10 -right-0" />
      </div>
    </div>
  </div>