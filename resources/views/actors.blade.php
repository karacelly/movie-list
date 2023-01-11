@extends('Layout.app')

@section('scripts')
    <title>
        Actors Page
    </title>
@endsection

@section('content')
    <div class="mx-16 px-8 py-5">
        <div class="top flex flex-row justify-between items-center">
            <div class="title w-full">
                <h1 class="text-3xl text-red-500 font-bold">Actors</h1>
            </div>
            <div class="actions flex flex-row max-w-sm w-full justify-between items-center">
                <div class="searchbar w-full items-center ">
                    <form action="{{ route('searchActor') }}" method="get" role="search" class="p-0 m-0">
                        <input class="bg-gray-800 w-full px-4 py-2 rounded-lg text-white" name="q" type="text"
                            placeholder="Search Actor Address">
                        <input type="submit" hidden />
                    </form>
                </div>
                @if (Auth::check() && Auth::user()->isAdmin())
                    <div class="add-actor w-1/3 ml-2">
                        <a class="bg-red-500 w-full text-white px-2 py-2 rounded-sm" href="/addActor">Add Actor</a>
                    </div>
                @endif
            </div>
        </div>

        <div class="my-6 grid sm:grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-x-14">
            @foreach ($actors as $a)
                <div>
                    <a href="{{ route('actor', $a) }}">
                        <div class="rounded-lg bg-zinc-800 h-80">
                            <div class="w-full h-56 overflow-hidden">
                                <img class="object-cover rounded-t-lg w-full h-full"
                                    src="{{ asset('/images/actors/' . $a->img_url) }}" alt="not found">
                            </div>
                            <div class="p-5">
                                <h6
                                    class="w-full mb-2 text-l font-bold tracking-tight text-gray-900 dark:text-white truncate">
                                    {{ $a->name }}
                                </h6>
                                <p class="w-full mb-3 font-normal text-gray-700 dark:text-gray-400 truncate">
                                    {{ $a->characters == null ? $a->characters[0]->character : '' }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
