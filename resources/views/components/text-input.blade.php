@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-[302px] h-[51px] px-[21px] py-[16] rounded-[7px] border-[#D1D5DB] font-medium placeholder:text-[#D1D5DB] placeholder:text-[16px] placeholder:font-medium']) !!}>

