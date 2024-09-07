<x-app-layout>
    <div class="flex flex-col items-center px-auto md:px-[308.56px]">
        <div class="mb-[20px] mt-[30px]">
            <h1 class="text-[30px] font-semibold leading-[50px] text-[#111827]">Image Single Page</h1>
        </div>
        <form class="flex flex-col items-center">
            <img src="{{ asset('storage/photos/cat.jpg') }}"
                 class="mt-[20px] w-[500px] md:w-[754px] h-[486.19px] bg-[#FFFFFF] rounded-[5px] border border-[#D9D9D9] mb-[20px] object-cover"
                 alt="">

            <div
                    class="w-[500px] md:w-[754px] h-[159.4px] bg-[#FFFFFF] rounded-[5px] mb-[30px] pt-[30px] pb-[30.99px] pl-[30px]">
                <p class="text-[16px] text-[#4B5563] leading-[26px]">Fluffy white lf-closed in contentment, and
                    its tail
                    is curled
                    around its
                    paws. The window behind
                    shows a glimpse of a garden with blooming flowers.</p>
                <div class="text-[#94A3B8] flex space-x-[13px] mt-[20.42px]">
                    <div>
                        <i class="fa fa-calendar-alt font-black text-[16px] leading-[26px] pr-[10px]"></i><span
                                class="text-[16px] leading-[26px] font-normal">12 August 2024</span>
                    </div>
                    <div><i class="fa fa-user-circle font-black text-[16px] leading-[26px]  pr-[10px]"></i><span
                                class="text-[16px] leading-[26px] font-normal">Mohamed_graphy</span></div>
                </div>
            </div>

            <div class="mx-auto mb-[52.52px]">
                <a class="inline-flex justify-center items-center cursor-pointer bg-[#EEEEEF] text-[#CC3B3B] w-[302px] h-[50px] px-[25px] py-[16px] rounded-[25px] font-medium text-[16px] leading-[19.36px]">Delete
                    Photo</a>
            </div>

        </form>
    </div>
</x-app-layout>
