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
                @foreach ($movies as $movie)
                    <h1 class="text-3xl text-red-500 font-bold">{{ $movie->name }}</h1>
                @endforeach
            </div>
        </div>
        <div class="grid grid-cols-5 mx-auto gap-5 w-full">
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
