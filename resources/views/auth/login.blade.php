<x-authentication-layout>
    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('¡Bienvenido de vuelta!') }} ✨</h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif   
    <!-- Formulario -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" type="email" name="email" required autofocus />                
            </div>
            <div>
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" />                
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <div class="mr-1">
                    <a class="text-sm underline hover:no-underline" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                </div>
            @endif            
            <x-jet-button class="ml-3">
                {{ __('Iniciar sesión') }}
            </x-jet-button>            
        </div>
    </form>
    <x-jet-validation-errors class="mt-4" />   
    <!-- Pie de página -->
    <div class="pt-5 mt-6 border-t border-slate-200">
        <div class="text-sm">
            {{ __('¿No tienes una cuenta?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('register') }}">{{ __('Regístrate') }}</a>
        </div>

    </div>
</x-authentication-layout>