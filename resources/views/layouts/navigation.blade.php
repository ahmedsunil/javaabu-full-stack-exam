<nav class="h-[80px] px-[110px] py-[12px] flex items-center justify-between bg-[#FFFFFF]">
    <div>
        <img src="{{ asset('imgs/FotoFoshi Logo.png') }}" alt="logo" class="w-[135.22px] h-[21.53px]">
    </div>
    <div class="flex items-center space-x-[15px]">
        <a href="">
            <div class="rounded-full bg-[#F3F4F6] w-[50px] h-[50px] flex items-center justify-center">
                <i class="fa-solid fa-gear text-[16px] font-black leading-[34px] text-[#94A3B8]"></i>
            </div>
        </a>
        <a href=""
           class="w-[188px] h-[50px] flex justify-center gap-2.5 rounded-[14px] px-[17px] py-[8px] bg-[#FFC727]">
            <i class="fa-solid fa-camera text-[16px] font-black leading-[34px] text-[#FFFFFF]">
            </i>
            <span class="text-[#FFFFFF] text-[16px] leading-[34px] font-medium ">Post a Photo</span>
        </a>
        <div class="relative group" x-data="{ open: false }">
            <div @click="open = !open" class="flex justify-between items-center space-x-[15px] cursor-pointer">
                <div class="flex justify-center items-center rounded-full bg-[#F3F4F6] w-[50px] h-[50px]">
                    <i class="fa-solid fa-user text-[16px] font-black leading-[34px] text-[#94A3B8] flex"></i>
                </div>
                <span class="w-[77px] h-[44px] text-[16px] leading-[22px] font-medium text-[#94A3B8]">Mohamed Ali</span>
                <i class="fa-solid fa-chevron-down w-[12px] h-[22px] font-semibold text-[16px] leading-[22px] text-[#94A3B8]"></i>
            </div>
            <a href="" x-show="open"
               @click.away="open = false"
               class="absolute w-[179.14px] h-[59px] bg-[#FFFFFF] px-[30px] py-[20px] rounded-[10px] shadow-custom gap-[10px] flex justify-between  items-center">
                <span class="font-medium leading-[19.36px] text-[#94A3B8]">Log Out</span><i
                    class="fa-solid fa-sign-out text-[#94A3B8]"></i></a>
        </div>
    </div>
</nav>
