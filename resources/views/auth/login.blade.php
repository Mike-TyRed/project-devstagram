@extends('layouts.app')

@section('title')
    Welcome to DevStagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12  p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="image user login">
        </div>
        <div class="md:w-4/12  bg-white p-6 rounded-lg shadow-lg">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                @if (session('message'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('message') }}</p>
                @endif

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" for="email" name="email" placeholder="Email"
                        class="border p-3 w-full rounded-lg @error('username') @enderror" value="{{ old('email') }}">

                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input type="password" for="password" name="password" placeholder="Password"
                        class="border p-3 w-full rounded-lg @error('password') @enderror" value="{{ old('password') }}">

                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember"> <label class="text-gray-500">Remember me</label> 
                </div>

                <input type="submit" value="Log in"
                    class="bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
