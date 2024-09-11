<x-app-layout>
    <div class="flex flex-col items-center px-auto md:px-[308.56px]">
        <div class="mb-[20px] mt-[30px]">
            <h1 class="text-[30px] font-semibold leading-[50px] text-[#111827]">Upload Image</h1>
        </div>
        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data"
              class="flex flex-col items-center">
            @csrf
            <div
                class="mt-[20px] w-[500px] md:w-[754px] h-[486.19px] bg-[#FFFFFF] rounded-[5px] border border-[#D9D9D9] mb-[20px]">
                <div class="flex items-center justify-center w-full px-[226px] py-[218.1px]">
                    <label for="image-upload">
                        <div
                            class="inline-flex justify-center items-center cursor-pointer bg-[#EEEEEF] w-[302px] h-[50px] px-[25px] py-[16px] rounded-[25px] font-medium text-[16px] leading-[19.36px] text-[#64748B]">
                            Select Image
                        </div>
                        <input id="image-upload" name="image" type="file" class="hidden" onchange="showFileName()"
                        />
                        <div class="mt-2 text-center">
                            <span id="file-name" class="text-[#64748B]"></span>
                        </div>

                        @error('image')
                        <div class="mt-2 text-center">
                            <span class="text-sm text-rose-500">{{ $message }}</span>
                        </div>
                        @enderror
                    </label>
                </div>
            </div>
            <div
                class="w-[500px] md:w-[754px] bg-[#FFFFFF] rounded-[5px] border border-[#D9D9D9] mb-[30px] pt-[30px] pl-[30px] pr-[32px] pb-[31.48px]">
                <x-input-label class="pb-[10.81px] text-[#4B5563]">Description</x-input-label>
                @error('description')
                <span class=" text-sm text-rose-500 mb-1">{{ $message }}</span>
                @enderror
                <textarea name="description"
                          class="w-[450px] md:w-[692px] h-[184px] rounded-[7px] border border-[#D1D5DB] pt-[16px] pl-[21px] resize-none placeholder:text-[#D1D5DB]"
                          placeholder="Write something about the photo...">{{ old('description') }}</textarea>

            </div>
            <div class="mx-auto mb-[52.52px]">
                <x-primary-button>Upload</x-primary-button>
            </div>

        </form>
    </div>
</x-app-layout>
