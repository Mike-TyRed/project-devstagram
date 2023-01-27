@extends('layouts.app')

@section('title')
    New Post
@endsection

@section('content')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center" action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">

            </form>
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">
                        Title
                    </label>
                    <input type="text" id="title" name="title" placeholder="Title"
                        class="border p-3 w-full rounded-lg @error('title') border-red-500 @enderror"
                        value="{{ old('title') }}">

                    @error('title')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="body" class="mb-2 block uppercase text-gray-500 font-bold">
                        Body
                    </label>
                    <textarea id="body" name="body" placeholder="Body"
                        class="border p-3 w-full rounded-lg @error('body') border-red-500 @enderror">
                        {{old('body')}}
                    </textarea>

                    @error('body')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>
                <input type="submit" value="Save"
                    class="bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection