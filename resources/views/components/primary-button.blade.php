<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center w-[302px] h-[50px]  bg-[#FFC700] hover:bg-[#FFDA4D] transition-all duration-200 py-[16px] border border-transparent rounded-[25px] font-semibold text-white']) }}>
    {{ $slot }}
</button>
