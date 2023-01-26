@extends('layouts.app')

@section('title')
    Tu cuenta
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-full md:8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="sm:w-8/12 lg:w-6/12 p-5">
                <img src="{{ asset('img/user.png') }}" alt="user image">
            </div>
            <div class="md:w-8/12 lg:w-6/12 p-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                <p class="text-gray-700 text-2xl">{{ $user->username }}</p>

                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">Followers</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Follow</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Posts</span>
                </p>
            </div>
        </div>
    </div>
@endsection
