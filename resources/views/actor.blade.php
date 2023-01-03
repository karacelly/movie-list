@extends('Layout.app')

@section('scripts')
    <title>
        Actor Detail Page
    </title>
@endsection

@section('content')
    <div class="flex flex-row my-6 mx-20">
        <div class="left w-1/4 flex flex-col mx-2 mr-4">
            <div class="relative group">
                <div class="img">
                    <img class="object-cover w-full rounded-lg" src="{{ asset('/images/actors/' . $actor->img_url) }}"
                        alt="">
                </div>
                @if (Auth::check() && Auth::user()->isAdmin())
                    <div
                        class="absolute z-10 w-full h-full bg-black top-0 left-0 rounded-lg opacity-70 hidden group-hover:block">
                    </div>
                    <div class="absolute z-20 text-white top-1 right-1 hidden group-hover:block">
                        <a href="{{ route('editActor', $actor) }}">
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
            <div class="pt-5">
                <h2 class="text-gray-900 dark:text-white text-xl">Personal Info</h2>
            </div>
            <div class="pt-4">
                <h6 class="w-full mb-1 text-sm tracking-tight text-gray-900 dark:text-white">
                    Popularity
                </h6>
                <p class="w-full mb-2 font-normal text-sm text-gray-700 dark:text-gray-400 ">
                    {{ $actor->popularity }}</p>
            </div>
            <div class="pt-1">
                <h6 class="w-full mb-1 text-sm tracking-tight text-gray-900 dark:text-white">
                    Gender
                </h6>
                <p class="w-full mb-2 font-normal text-sm text-gray-700 dark:text-gray-400 ">
                    {{ $actor->gender }}</p>
            </div>
            <div class="pt-1">
                <h6 class="w-full mb-1 text-sm tracking-tight text-gray-900 dark:text-white">
                    Birthday
                </h6>
                <p class="w-full mb-2 font-normal text-sm text-gray-700 dark:text-gray-400 ">
                    {{ date('d-m-Y', strtotime($actor->dob)) }}</p>
            </div>
            <div class="pt-1">
                <h6 class="w-full mb-1 text-sm tracking-tight text-gray-900 dark:text-white">
                    Place of Birth
                </h6>
                <p class="w-full mb-2 font-normal text-sm text-gray-700 dark:text-gray-400 ">
                    {{ $actor->birthplace }}</p>
            </div>
        </div>

        <div class="right w-3/4 mx-2 ml-4 text-gray-900 dark:text-white">
            <h1 class="text-3xl font-bold ">{{ $actor->name }}</h1>
            <h3 class="text-xl my-3">Biography</h3>
            <p class="text-sm">{{ $actor->biography }}</p>
            <h3 class="text-xl my-3">Known For</h3>
            <div class="my-2 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-x-4">
                @foreach ($actor->characters as $c)
                    <div>
                        <div class="rounded-lg  h-80">
                            <div class="w-full overflow-hidden">
                                <img class="object-cover rounded-t-lg w-full"
                                    src="{{ asset('/images/movies/image/' . $c->movie->img_url) }}" alt="not found">
                            </div>
                            <div class="py-2 px-5 bg-zinc-800 items-center">
                                <h6
                                    class="w-full mb-2 text-left items-center font-bold tracking-tight text-gray-900 dark:text-white truncate">
                                    {{ $c->movie->title }}
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
