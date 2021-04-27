{{-- <x-guest-layout>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<x-guest-layout>

<div class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        {{-- <form class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
            <p class="text-white font-medium text-center text-lg font-bold">LOGIN</p>
              <div class="">
                <label class="block text-sm text-white" for="email">E-mail</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email"  placeholder="Digite o e-mail" aria-label="email" required>
              </div>
              <div class="mt-2">
                <label class="block  text-sm text-white">Senha</label>
                 <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"
                  type="password" id="password" placeholder="Digite a sua senha" arial-label="password" required>
              </div>

              <div class="mt-4 items-center flex justify-between">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                  type="submit">Entrar</button>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400"
                  href="#">Esqueceu a senha ?</a>
              </div>
              <div class="text-center">
                <a class="inline-block right-0 align-baseline font-light text-sm text-500 hover:text-red-400">
                    Criar uma conta
                </a>
              </div>

        </form> --}}
        <x-jet-authentication-card >
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo/> --}}
                {{-- <img src="{{ asset('mylogo.png') }}" /> --}}
                <h2 class="font-mono text-5xl italic font-bold text-gray-200 white-with-blue-shadow bg-gray-100 p-4 rounded-md shadow-2xl sm:text-2xl">LOS NIETOS DE EVERILDA</h2>
            </x-slot>
            <x-jet-validation-errors class="mb-4" />
    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
        <form method="POST" action="{{ route('login') }}" class="max-w-sm m-4 p-10 bg-white bg-opacity-50 rounded shadow-xl">
            @csrf
            <p class="text-gray-800 font-medium text-center text-lg font-bold">LOGIN</p>
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" class="block text-sm text-gray-800" />
                <x-jet-input id="email" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-2">
                <x-jet-label for="password" value="{{ __('Password') }}" class="block  text-sm text-gray-800"/>
                <x-jet-input id="password" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="mt-4 items-center flex justify-between">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-800">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-gray-800 hover:text-red-400" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>

      </div>
    </div>
  </div>
</div>
<style>
  .login{
  background: url('{{asset("storage/img/albumfamilia.jpg")}}');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.white-with-blue-shadow {
   text-shadow: 1px 1px 2px rgb(14, 13, 13), 0 0 1em rgb(15, 15, 22), 0 0 0.2em rgb(5, 5, 19);
   color: rgb(5, 5, 5);
   font: 2.3em Georgia, "Bitstream Charter", "URW Bookman L", "Century Schoolbook L", serif;
}
@media (max-width: 600px) {
 .white-with-blue-shadow {
    font: 1.5em Georgia, "Bitstream Charter", "URW Bookman L", "Century Schoolbook L", serif;
}
}
</style>
</x-guest-layout>
