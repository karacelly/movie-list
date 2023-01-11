@extends('Layout.app')

@section('scripts')
    <title>
        All Movies
    </title>
@endsection

@section('content')
    <div class="mx-16 px-8 py-5">
        <div class="flex flex-row justify-between items-center py-3">
            <div class="title w-full">
                <h1 class="text-3xl text-red-500 font-bold">Movies</h1>
            </div>
            <div class="flex flex-row max-w-sm w-full items-center justify-center">
                <form action="{{ route('searchMovie') }}" method="GET" role="search" class="w-full items-center p-0 m-0">
                    <input class="bg-gray-800 w-full px-4 py-2 items-center rounded-lg text-white" name="q"
                        type="text" placeholder="Search Movie......">
                    <input type="submit" hidden />
                </form>

                @if (Auth::check() && Auth::user()->isAdmin())
                    <div class="add-actor w-1/3 ml-2 items-center inline-flex">
                        <a class="bg-red-500 w-full text-white px-2 py-2 rounded-sm text-center" href="/addMovie">Add
                            Movie</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="grid grid-cols-5 mx-auto gap-5 w-full sm:grid-cols-3">
            @foreach ($movies as $movie)
                <div class="flex justify-center flex-col mx-auto w-full container ">
                    <a href="{{ route('movie', $movie) }}">
                        <div class="flex justify-center">
                            <img src="{{ asset('/images/movies/image/' . $movie->img_url) }}" alt="{{ $movie->title }}"
                                class="w-full rounded-sm h-[400px] object-center object-cover">
                        </div>
                    </a>
                    <div class="flex justify-start items-start flex-col">
                        <h1 class="font-semibold text-white">
                            {{ $movie->title }}
                        </h1>
                        <h2 class="font-semibold text-gray-500">
                            {{ date('d-m-Y', strtotime($movie->release_date)) }} </h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
