<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16">
        @if ($image)
            <div class="flex flex-wrap justify-center gap-6">
                @foreach ($image as $im)
                    <img src="{{ $im->temporaryUrl() }}" class="object-cover" style="width: 110x; height: 90px;"
                        alt="">
                @endforeach
            </div>
        @endif

        <input type="file" wire:model="image" class="mb-4" multiple>

        @error('image')
            <span class="error">{{ $message }}</span>
        @enderror

        <button class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">
            Save Photo
        </button>
    </form>

    <div class="flex flex-wrap gap-7">
        @foreach ($images as $image)
            <img src="{{ $image }}" class="object-cover" style="width: 120px; height: 110px;" alt="">
        @endforeach
    </div>
</div>
