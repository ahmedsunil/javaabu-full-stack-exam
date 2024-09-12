@foreach($photos as $photo)
    <x-image-card
        :link="route('photos.show', $photo)"
        :photo="$photo->image"
        :id="$photo->id"/>
@endforeach
