@extends('Layout.app')

@section('scripts')
    <title>
        Edit Movie Page
    </title>
@endsection

@section('content')
    <div class="mx-4">
        <h1 class="text-white text-3xl font-bold py-5">Edit Movie</h1>

        <form action="{{ route('editMovie.action'), $movie }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input text-zinc-300">
                <p>Title</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="title"
                    value="{{ $movie->title }}">
            </div>
            <div class="input text-zinc-300">
                <p>Description</p>
                <textarea name="description" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" rows="5"></textarea>

            </div>
            <div class="input text-zinc-300">
                <p>Genre</p>
                <select class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="genre" id="genre">
                    <option value="null">-- Open this select menu --</option>
                    <option value="Crime">Crime</option>
                    <option value="Drama">Drama</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="History">History</option>
                    <option value="Horror">Horror</option>
                    <option value="Family">Family</option>
                </select>
            </div>
            <div class="input text-zinc-300">
                <p>Director</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="director">
            </div>

            <div class="input text-zinc-300">
                <p>Release Date</p>
                <input name="release_date" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="date"
                    value="{{ $movie->release_date->format('Y-m-d') }}>
            </div>
            <div class="input
                    text-zinc-300">
                <p>Image Url</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="img_url" type="file">
            </div>
            <div class="input text-zinc-300">
                <p>Background Url</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="background_url" type="file">
            </div>
            @if (session('success'))
                <p class="text-green-500 text-xl">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="text-red-600 text-sm">{{ $err }}</p>
                @endforeach
            @endif
            <div class="mt-4">
                <button type="submit" class="w-1/3 rounded-md bg-red-500 py-2 px-10 text-white">Edit</button>
            </div>
        </form>
    </div>

@endsection
