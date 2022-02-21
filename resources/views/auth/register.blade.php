<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

             <!-- Name -->
             <div>
                <x-label for="prenom" :value="__('prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus />
            </div>

             <!-- AGE -->
             <div>
                <x-label for="age" :value="__('age')" />

                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus />
            </div>

             <!-- AGE -->
             {{-- <div>
                <x-label for="avatar" :value="__('avatar')" />

                <x-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" :value="old('avatar')" required autofocus />
                <select name="avatar" id="">
                     @foreach ($avatarTout as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->nom }}
                    </option>

                    @endforeach
                </select>
            </div> --}}

            {{-- SELECT AVATAR -> fichier register --}}
                <div class="mt-5">
                <div class="mb-3 xl:w-96">
                    <label for="">Select avatar</label>
                  <select name="avatar_id" class="form-select appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                      @foreach ($avatars as $item)
                          <option value="{{ $item->id }}">{{ $item->nom }}</option>
                      @endforeach
                  </select>
                </div>
              </div>



            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
