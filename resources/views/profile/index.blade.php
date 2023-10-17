@extends('layouts.app')

@section('title')
    Editar perfil: {{ auth()->user()->username }}
@endsection

@section('content')
    <div class="md:flex md:justify-center">
        <div class="md:-1/2 bg-white shadow p-6">
            <form class="mt-10 md:mt-0" action="">
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" for="username" name="username" placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}">

                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Image profile
                    </label>
                    <input type="file" for="image" name="image" accept=".jpg, .jpeg, .png"
                        class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="Save"
                    class="bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
