{{-- Nothing in the world is as soft and yielding as water. --}}
<div class="inline">
<p class="font-pt-serif font-secondary mb-4">
        Enter a complete URL so we can crawl through.
</p>
<div class="font-montserrat">
  <div class="md:flex-1 md:mr-10">
    <form class="@if($result) hidden @endif" wire:submit.prevent="searchURL">
      @error('url') <span class="block text-xs text-red-700 ">{{ $message }}</span> @enderror
      <input type="text" name="url" wire:model.lazy="url" class="w-2/3 p-4 mb-2 bg-secondary border-2 border-solid rounded-lg" placeholder="https://github.com/SinhaAmrit">
      <button type="submit" class="bg-black text-xl px-5 py-3 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2 @error('url') opacity-60 cursor-not-allowed @enderror" @error('url') disabled @enderror>
        <i class="text-white mr-1 text-xl fa-brands fa-searchengin"></i> 
        Search <!-- <span class="text-xs" wire:loading.delay.longer>...</span> -->
      </button>
    </form>
  </div>
  @if(isset($result))
  <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
    <span class="w-full block h-full">
      <img alt="blog photo" src="{{ $result['cover'] }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
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
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Reset
                </div>
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Share
                </div>
            </div>
        </div>
      </span>
    </div>
  @endif
  </div>
</div>