<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="header fixed-top bg-surface">
        <a href="#" class="left back-btn"><i class="icon-left-btn"></i></a>
    </div>

    <h4 class="text-center mb-3">{{ __('Login') }}</h4>
    <h6 class="text-center">Please provide login credential details</h6>

    <form action="{{ route('login') }}" method="post" class="mt-16">
        @csrf
        <fieldset class="mt-16">
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Email Address" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </fieldset>
        <fieldset class="mt-16 mb-12">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password"  placeholder="Password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </fieldset>

        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        <x-primary-button class="ml-3 mt-4">
            {{ __('Log in') }}
        </x-primary-button>
        <p class="mt-20 text-center text-small">Dont have an Account? &ensp;<a href="{{route('register')}}">Sign up</a></p>
    </form>

</x-guest-layout>
