<x-guest-layout>
    <div class="mb-4 font-sans text-md dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="font-sans flex-1 px-5 py-2.5 text-center text-white bg-[#BF8e43] rounded-lg hover:bg-white hover:text-[#BF8e43] hover:border-[#BF8e43] border">{{ __('Email Password Reset Link') }}</button>    
        </div>
    </form>
</x-guest-layout>

