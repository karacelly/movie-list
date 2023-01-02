@extends('Layout.app')

@section('scripts')
    <title>
        All Movies
    </title>
@endsection

@section('content')
    <div class="container w-full mx-auto p-5">
        <div class="grid grid-cols-4 mx-auto gap-5 w-full">
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
                            {{ $movie->release_date }}
                        </h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
