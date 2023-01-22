@extends('layouts.app')

@section('title')
    Nuevo registro
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12  p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="image user register">
        </div>
        <div class="md:w-4/12  bg-white p-6 rounded-lg shadow-lg">
            <form action=" {{ route('register') }} " method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Name
                    </label>
                    <input type="text" for="name" name="name" placeholder="Name"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" for="username" name="username" placeholder="Username"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" for="email" name="email" placeholder="Email"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input type="password" for="password" name="password" placeholder="Password"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Confirmation password
                    </label>
                    <input type="password" for="password_confirmation" name="password_confirmation"
                        placeholder="Confirmation password" class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit" value="Sign In"
                    class="bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
