<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="https://unifil.br/assets/uploads/2019/10/logo.svg" style="height: 100px; width: 100px;"
                    alt="">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                    autocomplete="current-password" />
            </div>

            <div class="google-login-button mt-4">
                <x-button class="google">
                    <a><img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" width="30"
                        height="30" viewBox="0 0 50 50" style=" display:inline; margin-right:10px;"></a>
                    <a class="google-button underline text-sm text-white-100 hover:text-white" href="{{ route('Google') }}">
                        Continuar com o Google
                    </a>
                </x-button>
            </div>

            <!-- Remember Me -->
            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            {{-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha ?') }}
                    </a>
                @endif --}}

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<style>
.google-button {
    text-decoration:none;
}

.google-login-button {
    width: 100%;
}

.google {
    width: 100%;
    display: flex;
    justify-content: center;
}

</style>
