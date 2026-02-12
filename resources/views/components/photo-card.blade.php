<div class="group relative overflow-hidden rounded-lg bg-base-200 aspect-square cursor-pointer"
    @click="$dispatch('open-lightbox', { url: '{{ $photo->url }}', filename: '{{ $photo->original_filename }}', date: '{{ $photo->created_at->format('M d, Y') }}' })">


    <img src="{{ $photo->url }}" alt="{{ $photo->original_filename }}"
        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">


    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">

        <div
            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <div class="bg-white/90 text-gray-800 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                </svg>
            </div>
        </div>


        <button @click.stop="if(confirm('Delete this photo?')) { /* delete logic */ }"
            class="absolute top-3 right-3 btn btn-circle btn-sm bg-white/90 hover:bg-white border-0 text-error opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
        </button>
    </div>
</div>