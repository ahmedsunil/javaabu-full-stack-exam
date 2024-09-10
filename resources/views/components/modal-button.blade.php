<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex justify-center items-center x-[25px] w-[191px] h-[50px] rounded-[25px]']) }}>
    {{ $slot }}
</button>
