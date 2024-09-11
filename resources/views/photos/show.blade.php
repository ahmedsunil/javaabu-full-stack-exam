<x-app-layout>
    <div class="flex flex-col items-center px-auto md:px-[308.56px]">
        <div class="mb-[20px] mt-[30px]">
            <h1 class="text-[30px] font-semibold leading-[50px] text-[#111827]">Image Single Page</h1>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ Storage::url($photo->image) }}"
                 class="mt-[20px] w-[500px] md:w-[754px] h-[486.19px] bg-[#FFFFFF] rounded-[20px] mb-[20px] object-cover"
                 alt="">
            <div
                class="w-[500px] md:w-[754px] h-[159.4px] bg-[#FFFFFF] rounded-[5px] mb-[30px] pt-[30px] pb-[30.99px] pl-[30px]">
                <p class="text-[16px] text-[#4B5563] leading-[26px]">{{ $photo->description }}</p>
                <div class="text-[#94A3B8] flex space-x-[13px] mt-[20.42px]">
                    <div>
                        <i class="fa fa-calendar-alt font-black text-[16px] leading-[26px] pr-[10px]"></i><span
                            class="text-[16px] leading-[26px] font-normal">{{ $photo->formatted_date }}</span>
                    </div>
                    <div><i class="fa fa-user-circle font-black text-[16px] leading-[26px]  pr-[10px]"></i><span
                            class="text-[16px] leading-[26px] font-normal">{{ $photo->user->name }}</span></div>
                </div>
            </div>

            @can('delete', $photo)
                <div class="mx-auto mb-[52.52px]" x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                    <button type="button" @click="showModal = true"
                            class="inline-flex justify-center items-center cursor-pointer bg-[#EEEEEF] text-[#CC3B3B] w-[302px] h-[50px] px-[25px] py-[16px] rounded-[25px] font-medium text-[16px] leading-[19.36px]">
                        Delete Photo
                    </button>

                    <div
                        class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
                        x-show="showModal"
                    >
                        <div
                            class="w-[515px] h-[286.97px] bg-[#FFFFFF] rounded-[15px] z-50"
                            @click.away="showModal = false"
                            x-transition:enter="motion-safe:ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100">

                            <div class="flex justify-end pt-[30px] pr-[30px]">
                                <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                                    <i class="fa fa-times text-[#94A3B8] text-[22px] leading-[26px]"></i>
                                </button>
                            </div>

                            <div class="text-center px-[58.5px]">
                                <h1 class="font-semibold text-[24px] leading-[50px] text-[#111827]">Are you sure?</h1>
                                <p class="text-[16px] leading-[26px] font-medium text-[#4B5563] pt-[10px]">You cant undo
                                    this delete
                                    operation. Are
                                    you sure you
                                    want to delete this photo?</p>
                            </div>

                            <div class="flex justify-center items-center mt-[30px] space-x-[14px]">
                                <x-modal-button class="bg-[#F1F5F9] text-[#334155]" @click="showModal = false">Cancel
                                </x-modal-button>
                                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-modal-button type="submit" class="bg-[#CC3B3B] text-[#FFFFFF]">Delete
                                    </x-modal-button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
        </div>
    </div>
</x-app-layout>



