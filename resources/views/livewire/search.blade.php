<div class="md:flex-1 md:mr-10">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <form wire:submit.prevent="searchURL">
        @error('url') <span class="block text-xs text-red-700 ">{{ $message }}</span> @enderror
        <input type="text" name="url" wire:model="url" class="w-2/3 p-4 mb-2 bg-secondary border-2 border-solid rounded-lg" placeholder="https://github.com/SinhaAmrit">
        <button type="submit" class="bg-black text-xl px-6 py-3 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2 @error('url') opacity-60 cursor-not-allowed @enderror" disabled>
          <i class="text-white mr-1 text-xl fa-brands fa-searchengin"></i> 
          Search <span wire:loading.delay.longer>...</span>
        </button>
    </form>
</div>
