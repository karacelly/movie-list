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
            background-image: url('{{ asset('/images/movies/background/' . $movie->background_url) }}');
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
    <div class="w-full">
        <div class="flex flex-col w-full ">
            <div class="flex flex-row w-full overflow py-5 px-24">
                <div class="flex max-w-md p-5 relative group h-1/3">
                    <img class="object-cover w-full rounded-lg opacity-100"
                        src="{{ asset('/images/movies/image/' . $movie->img_url) }}" alt="{{ $movie->title }}" />
                </div>
                <div class="w-full flex flex-col relative justify-start p-5 space-y-5">
                    <div class="flex text-white items-center justify-between">
                        <div class="title w-4/5">
                            <h1 class="text-5xl font-bold">{{ $movie->title }}
                            </h1>
                        </div>
                        @if (Auth::check() && Auth::user()->isAdmin())
                            <div class="action flex justify-between items-center text-xl w-1/12">
                                <div class="edit">
                                    <a href="{{ route('editMovie', $movie) }}">
                                        <i class="far fa-pen-to-square"></i>
                                    </a>
                                </div>
                                <div class="remove flex justify-center items-center">
                                    <form action="{{ route('removeMovie.action', $movie) }}" method="POST" class="m-0">
                                        @csrf
                                        <button class="remove">
                                            <i class="far fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="flex">
                        @foreach ($movie->genres as $genre)
                            <div
                                class="cursor-pointer w-[150px] rounded-full bg-transparent border border-white text-white text-center py-1 hover:-translate-y-1 transition duration-100 ease-in-out">
                                {{ $genre->genre->name }}
                            </div>
                        @endforeach
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
            <div class="mx-10 my-5">
                <div class="p-5 ">
                    <div class="divide-x-4 divide-red-500">
                        <h1></h1>
                        <h1 class="text-white text-xl font-bold">
                            Cast
                        </h1>
                    </div>
                    <div class="my-6 grid sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-6 gap-x-14">
                        @foreach ($movie->actors as $a)
                            <div>
                                <a href="{{ route('actor', $a->actor) }}">
                                    <div class="rounded-lg bg-zinc-800 h-80">
                                        <div class="w-full h-56 overflow-hidden">
                                            <img class="object-cover rounded-t-lg w-full h-full"
                                                src="{{ asset('/images/actors/' . $a->actor->img_url) }}" alt="not found">
                                        </div>
                                        <div class="p-5">
                                            <h6
                                                class="w-full mb-2 text-l font-bold tracking-tight text-gray-900 dark:text-white truncate">
                                                {{ $a->actor->name }}
                                            </h6>
                                            <p class="w-full mb-3 font-normal text-gray-700 dark:text-gray-400 truncate">
                                                {{ $a->character }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-5">
                    <div class="divide-x-4 divide-red-500">
                        <h1></h1>
                        <h1 class="text-white text-xl font-bold">
                            More
                        </h1>
                    </div>
                    <div class="grid grid-cols-5 mt-5 gap-3">
                        @foreach ($more as $movie)
                            <div
                                class="flex justify-center flex-col  container w-[250px] cursor-pointer hover:-translate-y-2 transition duration-300 ease-linear">
                                <div class="flex justify-center">
                                    <a href="{{ route('movie', $movie) }}">
                                        <img src="{{ asset('/images/movies/image/' . $movie->img_url) }}"
                                            alt="{{ $movie->title }}"
                                            class="w-full rounded-md h-[400px] object-center object-cover" />
                                    </a>
                                </div>
                                <div class="flex justify-between items-start flex-col">
                                    <div class="flex justify-start flex-col">
                                        <h1 class="font-semibold text-white">
                                            {{ $movie->title }}
                                        </h1>
                                    </div>
                                    <div class="flex justify-between w-full">
                                        <h2 class="font-semibold text-gray-500">
                                            {{ date('d-m-Y', strtotime($movie->release_date)) }}
                                        </h2>

                                        @if (Auth::check() && Auth::user()->nonAdmin())
                                            @if ($flags[$loop->index] == true)
                                                <form action="{{ route('addWatchlist', $movie) }}" method="post">
                                                    @csrf
                                                    <button type="submit"
                                                        class=" text-gray-500 flex justify-end items-end ">
                                                        <x-eos-add
                                                            class="w-5 hover:scale-150 transition duration-75 ease-linear" />
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('removeWatchlist', $movie) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="text-red-500">
                                                        <x-eos-done
                                                            class="w-5 hover:scale-150 transition duration-75 ease-linear" />
                                                    </button>
                                                </form>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
