@props([
    'link',
    'photo',
    'id'
])


<div class="aspect-square overflow-hidden rounded-[15px]">
    <a href="{{ $link }}">
        <img src="{{ Storage::url($photo) }}" alt="photo-{{ $id }}"
             class="w-full h-full object-cover block">
    </a>
</div>
