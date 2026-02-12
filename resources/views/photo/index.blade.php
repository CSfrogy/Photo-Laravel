<x-layout>
    <div class="container mx-auto px-4 py-8" x-data="{
        lightboxOpen: false,
        currentPhoto: { url: '', filename: '', date: '' }
    }" @open-lightbox.window="lightboxOpen = true; currentPhoto = $event.detail"
        @keydown.escape.window="lightboxOpen = false">

        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">My Gallery</h1>
            <a href="#" class="btn btn-primary">Upload Photo</a>
        </div>

        @if($photos->isEmpty())
            <div class="text-center py-16">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto text-base-300" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-xl text-gray-500 mt-4">No photos yet</p>
                <p class="text-gray-400 mt-2">Upload your first photo to get started!</p>
            </div>
        @else
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                @foreach($photos as $photo)
                    <x-photo-card :photo="$photo" />
                @endforeach
            </div>
        @endif


        <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click="lightboxOpen = false"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/95 p-4" style="display: none;">


            <button @click="lightboxOpen = false"
                class="absolute top-4 right-4 btn btn-circle btn-ghost text-white hover:bg-white/10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>


            <div @click.stop class="max-w-7xl max-h-full flex flex-col items-center">
                <img :src="currentPhoto.url" :alt="currentPhoto.filename"
                    class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl">


                <div class="mt-4 text-center text-white">
                    <h3 class="text-lg font-medium" x-text="currentPhoto.filename"></h3>
                    <p class="text-sm opacity-70" x-text="currentPhoto.date"></p>
                </div>


                <a :href="currentPhoto.url" download class="btn btn-primary mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Download
                </a>
            </div>
        </div>
    </div>
</x-layout>