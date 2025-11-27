<x-guest-layout>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-gray-900 via-gray-950 to-black text-gray-100">

        <div class="transform scale-110 mb-4 opacity-90">
            <x-authentication-card-logo />
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-8 py-8 bg-gray-900/80 backdrop-blur-md shadow-2xl overflow-hidden sm:rounded-2xl border border-gray-800/50 ring-1 ring-white/10">

            <x-validation-errors class="mb-4" />

            @session('status')
                <div
                    class="mb-4 font-medium text-sm text-emerald-400 bg-emerald-900/20 p-3 rounded-lg border border-emerald-500/20">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}"
                        class="text-gray-400 uppercase text-xs font-bold tracking-wider" />
                    <x-input id="email"
                        class="block mt-2 w-full bg-gray-950/50 text-gray-100 border-gray-700 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-inner placeholder-gray-600"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                        placeholder="tu@correo.com" />
                </div>

                <div class="mt-6">
                    <x-label for="password" value="{{ __('Password') }}"
                        class="text-gray-400 uppercase text-xs font-bold tracking-wider" />
                    <x-input id="password"
                        class="block mt-2 w-full bg-gray-950/50 text-gray-100 border-gray-700 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-inner"
                        type="password" name="password" required autocomplete="current-password"
                        placeholder="••••••••" />
                </div>

                <div class="block mt-6">
                    <label for="remember_me" class="flex items-center cursor-pointer group">
                        <x-checkbox id="remember_me" name="remember"
                            class="w-5 h-5 rounded bg-gray-800 border-gray-600 text-indigo-600 focus:ring-indigo-600 focus:ring-offset-gray-900 transition ease-in-out duration-150" />
                        <span
                            class="ms-2 text-sm text-gray-400 group-hover:text-gray-200 transition duration-200">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-8">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-500 hover:text-indigo-400 transition duration-200 ease-in-out"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button
                        class="ms-4 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-2 px-6 rounded-lg shadow-lg hover:shadow-indigo-500/30 transition-all duration-200 border border-transparent focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>