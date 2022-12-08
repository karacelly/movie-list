@extends('Layout.app')

@section('scripts')
    <title>
        Actors Page
    </title>
@endsection

@section('content')
    <div class="top flex flex-row justify-between items-center">
        <div class="title w-full">
            <h1 class="text-3xl text-red-500 font-bold">Actors</h1>
        </div>
        <div class="actions flex flex-row max-w-sm w-full justify-between items-center">
            <div class="searchbar w-full mr-2 ">
                <input class="bg-gray-800 w-full px-4 py-2 rounded-lg" type="text" placeholder="Search Actor Address">
            </div>
            @if (Auth::check() && Auth::user()->isAdmin())
                <div class="add-actor w-1/3">
                    <button class="bg-red-500 w-full text-white px-2 py-2 rounded-sm">Add Actor</button>
                </div>
            @endif
        </div>
    </div>

    <div class="my-4 grid sm:grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-x-4">
        @foreach ($actors as $a)
            <div>
                <div class="rounded-lg bg-zinc-800 h-80">
                    <div class="w-full h-56 overflow-hidden">
                        <img class="object-cover rounded-t-lg w-full " src="{{ asset('/images/actors/' . $a->img_url) }}"
                            alt="not found">
                    </div>
                    <div class="p-5">
                        <h6 class="w-full mb-2 text-l font-bold tracking-tight text-gray-900 dark:text-white truncate">
                            {{ $a->name }}
                        </h6>
                        <p class="w-full mb-3 font-normal text-gray-700 dark:text-gray-400 truncate">
                            {{ $a->characters[0]->character }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
