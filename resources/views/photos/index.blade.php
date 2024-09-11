<x-app-layout>
    <div class="mx-auto">
        <div class="my-[20px] mx-[110px]">
            <h1 class="text-[24px] font-extrabold leading-[50px] text-[#111827]">
                Feed</h1>
        </div>
        <div
            class="h-auto mb-[79px] mx-[96px] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @forelse($photos as $photo)
                <x-image-card
                    :link="route('photos.show', $photo)"
                    :photo="$photo->image"
                    :id="$photo->id"
                    :description="$photo->description"/>
            @empty
                <p class="text-gray-500">No photos available.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
