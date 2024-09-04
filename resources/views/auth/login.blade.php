<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div class="">
            <x-input-label for="email" :value="__('Email')" class="pb-[10.33px]"/>
            <x-text-input id="email" class="block" type="email" name="email" :value="old('email')" required
                          placeholder="Email"
                          autofocus autocomplete="username"/>

            <x-input-error :messages="$errors->get('email')" class=""/>
        </div>

        <!-- Password -->
        <div class="pt-[20.33px]">
            <x-input-label for="password" :value="__('Password')" class="pb-[10.33px]"/>

            <x-text-input id="password" class=""
                          type="password"
                          name="password"
                          placeholder="Password"
                          required autocomplete="current-password"/>

            <x-input-error :messages="$errors->get('password')" class=""/>
        </div>

        <div class="mt-[30.34px]">
            <x-primary-button>
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
