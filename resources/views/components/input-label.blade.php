@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-[16px] text-[#4B5563]']) }}>
    {{ $value ?? $slot }}
</label>
