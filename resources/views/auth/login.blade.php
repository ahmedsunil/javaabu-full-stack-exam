<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>
    <div class="mb-[20px] mt-[113.73px]">
        <h1 class="text-[30px] font-semibold leading-[50px] text-[#111827]">Login to FotoFoshi</h1>
    </div>

    <div
        class="w-[362px] h-auto p-[30px] bg-white border-1  border-[#F3F4F6] sm:max-w-md sm:rounded-lg">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="">
                <x-input-label for="email" :value="__('Email')" class="pb-[10.33px]"/>
                <x-text-input id="email" class="block" type="email" name="email" :value="old('email')" required
                              placeholder="Email"
                              autofocus autocomplete="username"/>

                <x-input-error :messages="$errors->get('email')" class="mt-1"/>
            </div>

            <!-- Password -->
            <div class="pt-[20.33px]">
                <x-input-label for="password" :value="__('Password')" class="pb-[10.33px]"/>

                <x-text-input id="password" class=""
                              type="password"
                              name="password"
                              placeholder="Password"
                              required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-1"/>
            </div>

            <div class="mt-[30.34px]">
                <x-primary-button>
                    {{ __('Login') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    <div class="mt-[30.34px]">
        <p class="text-[#6B7280] font-medium text-[16px] leading-[19.36px]">Don’t have an account?
            <a href="{{ route('register') }}" class="text-[#FFC700]">Sign Up</a>
        </p>
    </div>
</x-guest-layout>
