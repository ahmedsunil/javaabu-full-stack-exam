<x-app-layout>
    <div class="my-[20px] ml-[110px]">
        <h1 class="text-[24px] font-extrabold leading-[50px] text-[#111827]">Feed</h1>
        {{--        <img src="{{ asset('storage/photos/cat.jpg') }}" width="362px" height="362px"--}}
        {{--             class="rounded-[15px] padding-[30px]" alt="">--}}

        <div class="w-[1186px] grid grid-rows-4 grid-flow-col gap-4">

            <a href="">
                <div class="aspect-square overflow-hidden rounded-[15px] padding-[30px] w-[362px]">
                    <img src="{{ asset('storage/photos/cat.jpg') }}" alt="White cat" class="w-full h-full object-cover">
                </div>
            </a>
            <div class="aspect-square overflow-hidden rounded-[15px] padding-[30px] w-[362px] h-[362px]">
                <img src="{{ asset('storage/photos/cat.jpg') }}" alt="White cat" class="w-full h-full object-cover">
            </div>
            <div class="aspect-square overflow-hidden rounded-[15px] padding-[30px] w-[362px]">
                <img src="{{ asset('storage/photos/cat.jpg') }}" alt="White cat" class="w-full h-full object-cover">
            </div>
            <div class="aspect-square overflow-hidden rounded-[15px] padding-[30px] w-[362px]">
                <img src="{{ asset('storage/photos/cat.jpg') }}" alt="White cat" class="w-full h-full object-cover">
            </div>
            <div class="aspect-square overflow-hidden rounded-[15px] padding-[30px] w-[362px]">
                <img src="{{ asset('storage/photos/cat.jpg') }}" alt="White cat" class="w-full h-full object-cover">
            </div>

        </div>

    </div>
</x-app-layout>
