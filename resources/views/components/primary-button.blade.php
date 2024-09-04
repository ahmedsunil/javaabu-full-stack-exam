<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center w-[302px] h-[50px]  bg-[#FFC700] py-[16px] border border-transparent rounded-[25px] font-semibold text-white']) }}>
    {{ $slot }}
</button>
