@extends('Layout.app')

@section('scripts')
    <title>
        MovieList
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
@endsection

@section('content')
    <div class="px-8 py-5">

        <div class="container w-full mx-auto min-h-[100px]:">
            <x-home-carousel>
                @foreach ($random as $key => $rand)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }} float-left w-full">
                        <img src="{{ asset('/images/movies/image/' . $rand->img_url) }}" alt="{{ $rand->title }}"
                            class="w-auto mx-auto  max-w-lg block object-cover object-center" />
                    </div>
                @endforeach
            </x-home-carousel>

            <div class="flex justify-start items-center space-x-4">
                <x-icomoon-fire class="w-5 text-white" />
                <h1 class="text-white font-semibold text-2xl">
                    Popular
                </h1>
            </div>
            <hr class="mt-2 py-2 border-gray-800" />
            <div class="grid grid-cols-5 mx-auto gap-5 w-full">
                @foreach ($famous as $movie)
                    <x-large-movie-card :id="$movie->id" :title="$movie->title" :imgUrl="$movie->img_url" :releaseDate="$movie->release_date" />
                @endforeach

            </div>

            <div class="flex items-center justify-between space-x-4 mt-10">
                <div class="flex justify-start items-center space-x-4 ">
                    <x-icomoon-film class="w-5 text-white" />
                    <h1 class="text-white font-semibold text-2xl">
                        Show
                    </h1>
                </div>

                <div class="s flex justify-end">
                    <form action="{{ route('searchMovie') }}" method="GET" role="search"
                        class="w-full items-center p-0 m-0">
                        <input class="bg-gray-800 w-full px-4 py-2 items-center rounded-lg text-white" name="q"
                            type="text" placeholder="Search Movie......">
                        <input type="submit" hidden />
                    </form>
                </div>

            </div>
            <hr class="mt-2 py-2 border-gray-800" />

            <div class="w-full">
                <div class="flex flex-row w-full mx-auto container justify-between overflow-scroll gap-2">
                    @foreach ($genres as $genre)
                        <div
                            class="mb-4 cursor-pointer rounded-full bg-primaryBlack text-white px-14 py-1 hover:-translate-y-1 transition duration-100 ease-in-out">
                            <a
                                href="{{ request()->fullUrlWithQuery(['g' => $genre->id]) }}
                                ">{{ $genre->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="my-10 w-full">
                <x-sortBy />
            </div>

            @if (Auth::check() && Auth::user()->isAdmin())
                <div class="w-full flex justify-end items-end">
                    <a href="/addMovie"
                        class="inline-flex items-center bg-red-500 px-5 py-2 rounded-lg hover:-translate-y-2 duration-100 transition ease-out text-white font-semibold">
                        <x-eos-add class="w-4" />
                        Add Movie
                    </a>
                </div>
            @endif

            <div class="grid grid-cols-5 mt-5 gap-3">
                @foreach ($movies as $movie)
                    <x-small-movie-card :id="$movie->id" :title="$movie->title" :imgUrl="$movie->img_url" :releaseDate="$movie->release_date" />
                @endforeach
            </div>

        </div>
    </div>
@endsection

@section('js-scripts')
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endsection
