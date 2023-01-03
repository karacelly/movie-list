@extends('Layout.app')

@section('scripts')
    <title>
        Movie Detail
    </title>
@endsection

@section('content')
    <style>
        .overflow {
            position: relative;
        }

        .overflow::before {
            content: '';
            background-image: url('{{ asset('/images/movies/background/' . $movie->img_url) }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            opacity: 0.4;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
        }
    </style>
    <div class="container w-full mx-auto p-5">

        <div class="flex flex-col w-full">
            <div class="flex flex-row w-full overflow">
                <div class="flex max-w-lg p-5 relative group">
                    <img class="object-cover w-full rounded-lg opacity-100"
                        src="{{ asset('/images/movies/image/' . $movie->img_url) }}" alt="{{ $movie->title }}" />
                    @if (Auth::check() && Auth::user()->isAdmin())
                        <div
                            class="absolute z-10 w-full h-full bg-black top-0 left-0 rounded-lg opacity-70 hidden group-hover:block">
                        </div>
                        <div class="absolute z-20 text-white top-1 right-1 hidden group-hover:block">
                            <a href="{{ route('editMovie', $movie) }}">
                                <div class="edit rounded-full bg-red-600 p-4">
                                    <i class="far fa-pen-to-square"></i>
                                </div>
                            </a>
                            <div class="remove rounded-full bg-red-600 p-4">
                                <i class="far fa-trash-can"></i>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="w-full flex flex-col relative justify-start p-5 space-y-5">
                    <h1 class="text-white text-xl font-bold">
                        {{ $movie->title }}
                    </h1>
                    <div
                        class="cursor-pointer w-[150px] rounded-full bg-transparent border border-white text-white text-center py-1 hover:-translate-y-1 transition duration-100 ease-in-out">
                        {{ $movie->genre }}
                    </div>
                    <div class="flex justify-start font-bold text-white">
                        Release Year
                    </div>
                    <div class="flex justify-start font-semibold text-white">
                        {{ date('d-m-Y', strtotime($movie->release_date)) }}
                    </div>
                    <div class="flex justify-start font-bold text-white">
                        Story Line
                    </div>
                    <div class="flex justify-start font-semibold text-white">
                        {{ $movie->description }}
                    </div>
                    <div class="flex justify-start font-bold text-white">
                        Director
                    </div>
                    <div class="flex justify-start font-semibold text-white">
                        {{ $movie->director }}
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="divide-x-4 divide-red-500">
                    <h1></h1>
                    <h1 class="text-white text-xl font-bold">
                        Cast
                    </h1>
                </div>
            </div>
            <div class="p-5">
                <div class="divide-x-4 divide-red-500">
                    <h1></h1>
                    <h1 class="text-white text-xl font-bold">
                        More
                    </h1>
                </div>
            </div>
        </div>
    </div>
@endsection
