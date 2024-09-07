<x-guest-layout>
    <div class="mb-[20px] mt-[54.5px]">
        <h1 class="text-[30px] font-semibold leading-[50px] text-[#111827]">Sign Up</h1>
    </div>

    <div
        class="w-[362px] h-auto px-[30px] pt-[30.7px] bg-white border-1  border-[#F3F4F6] sm:max-w-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-input-label for="name" :value="__('Full Name')" class="pb-[10.33px]"/>
                <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required
                              autofocus autocomplete="name" placeholder="Full Name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-1"/>
            </div>

            <!-- Email Address -->
            <div class="pt-[20.33px]">
                <x-input-label for="email" :value="__('Email')" class="pb-[10.33px]"/>
                <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')"
                              required
                              autocomplete="username" placeholder="Email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-1"/>
            </div>

            <!-- Password -->
            <div class="pt-[20.33px]">
                <x-input-label for="password" :value="__('Password')" class="pb-[10.33px]"/>

                <x-text-input id="password" class="block w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password" placeholder="Password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-1"/>
            </div>

            <!-- Confirm Password -->
            <div class="pt-[20.33px]">
                <x-input-label for="password_confirmation" :value="__('Password Confirmation')" class="pb-[10.33px]"/>

                <x-text-input id="password_confirmation" class="block w-full"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password"
                              placeholder="Password Confirmation"/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1"/>
            </div>

            <div class="flex items-center justify-end mt-[30.32px] mb-[30.95px]">
                <x-primary-button class="">
                    {{ __('Sign Up') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    <div class="mt-[30.34px]">
        <p class="text-[#6B7280] font-medium text-[16px] leading-[19.36px]">Already have an account?
            <a href="{{ route('login') }}" class="text-[#FFC700]">Log in</a>
        </p>
    </div>
</x-guest-layout>
