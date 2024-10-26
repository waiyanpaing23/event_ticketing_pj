{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-white p-3">
        <div class="container d-flex justify-content-between">
            <div>
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-body-tertiary">
        <div class="row p-5">

            <div class="row d-flex justify-content-center">

                <div class="col-5 mt-5 p-5 bg-white shadow-sm">

                        <div class="mb-5">
                            <h1>Register as Organizer</h1>
                        </div>

                        <form method="POST" action="{{ route('organizer.register') }}">
                            @csrf

                            <!-- Name -->
                            <div>

                                <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                                    placeholder="Enter Your Full Name" required autofocus>
                                @error('name')
                                    <small class="text-sm text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">

                                <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                                    placeholder="Enter Your Email" required>
                                @error('email')
                                    <small class="text-sm text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mt-4">

                                <input class="form-control" type="password" name="password"
                                    placeholder="Enter Your Password" required>
                                @error('password')
                                    <small class="text-sm text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">

                                <input class="form-control" type="password" name="password_confirmation"
                                    placeholder="Confirm Your Password" required>
                                @error('password_confirmation')
                                    <small class="text-sm text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-4">
                                <input type="submit" class="btn btn-dark w-100" value="Register">
                            </div>

                            <!-- Link to Login -->
                            <div class="mt-4">
                                <p>Already registered? <a href="{{ route('login') }}">Click here to login.</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

