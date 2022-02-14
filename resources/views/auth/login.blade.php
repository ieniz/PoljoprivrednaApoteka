
<x-guest-layout class="ml-2">
    <x-jet-authentication-card >
        <x-slot name="logo">
        <a href="" class="underline m-0.5 italic rounded-full bg-cover bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 ...">
                        BROJ INDEKSA 913
                    </a>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="py-12">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('E-mail') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Zapamti me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="ml-4 inline-flex items-center px-4 py-2 bg-sky-300  hover:bg-green-700 border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4" href="{{ route('password.request') }}">
                        {{ __('Zaboravili ste lozinku?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 inline-flex items-center px-4 py-2 bg-sky-300  hover:bg-green-700 border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
</div>
    </x-jet-authentication-card>
</x-guest-layout>

