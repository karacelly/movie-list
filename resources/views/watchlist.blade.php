@extends('Layout.app')

@section('scripts')
    <title>
        My Watchlist
    </title>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endsection

@section('content')
    <div class="mx-8 px-12 py-5">
        <h1 class="text-red-600 font-bold text-3xl my-4">
            <i class="fas fa-bookmark"></i>
            <span class="text-white">
                My
            </span>
            Watchlist
        </h1>
        <div class="search-bar ">
            <form class="w-full bg-zinc-500 flex justify-between my-8 p-2 rounded-md" action="{{ route('searchWatchlist') }}"
                method="get">
                <input class="bg-zinc-500 w-11/12 text-white outline-none" placeholder="Search your watchlist ..."
                    type="text" name="query">
                <button class="text-gray-300" type="submit"><i class="fas fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="flex justify-start items-center">
            <div class="icon mr-5"><i class="fa-solid fa-filter text-gray-300 text-xl"></i></div>
            <div>
                <form action={{ route('sortWatchlist') }}>
                    <select onchange="this.form.submit()" class="bg-transparent text-gray-300 rounded-sm p-2" name="sort"
                        id="sort">
                        <option class="text-black" value="0">All</option>
                        <option class="text-black" value="Planning" @if (request()->has('sort') && request()->get('sort') == 'Planning') selected @endif>
                            Planned</option>
                        <option class="text-black" value="Watching" @if (request()->has('sort') && request()->get('sort') == 'Watching') selected @endif>
                            Watching</option>
                        <option class="text-black" value="Finished" @if (request()->has('sort') && request()->get('sort') == 'Finished') selected @endif>
                            Finished</option>
                    </select>
                </form>
            </div>
        </div>

        <table class="w-full text-white text-left border-separate border-spacing-y-4">
            <tr>
                <th>Poster</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($watchlists as $watchlist)
                <tr class="watchlist-row bg-zinc-800 ">
                    <td class="w-1/4">
                        <img class="w-1/3" src="{{ asset('/images/movies/image/' . $watchlist->movie->img_url) }}"
                            alt="No poster">
                    </td>
                    <td>
                        {{ $watchlist->movie->title }}
                    </td>
                    <td>{{ $watchlist->status }}</td>
                    <td>
                        <button class="open">
                            <x-eos-edit class="text-white w-5 text-center" />
                        </button>
                    </td>
                    <td>
                        <div class="modal invisible">
                            <div class="absolute left-0 right-0 top-0 bottom-0 bg-black opacity-50 overflow-hidden">
                            </div>
                            <div class="absolute sm:top-40 md:top-80 lg:top-1/3 left-0 right-0">
                                <div class="w-full flex justify-center items-center">
                                    <div class="w-1/2 bg-primaryBlack rounded-sm opacity-100 text-white pb-5 pt-7 px-10">
                                        <div class="flex justify-between items-center pb-5">
                                            <h2 class="text-white text-xl  ">Change Status</h2>
                                            <button class="closeModal">X</button>
                                        </div>
                                        <form action="{{ route('updateWatchlist', $watchlist->movie) }}" method="POST">
                                            @csrf
                                            <select class="w-full p-2 rounded-md text-black my-2" name="status"
                                                id="update">
                                                <option class="text-black" value="0">All</option>
                                                <option class="text-black" value="Planning">
                                                    Planned</option>
                                                <option class="text-black" value="Watching">
                                                    Watching</option>
                                                <option class="text-black" value="Finished">
                                                    Finished</option>
                                            </select>
                                            <div class="flex justify-end items-center pt-5">
                                                <div class="close">
                                                    <button type="button"
                                                        class="bg-gray-400 rounded-md p-2 closeModal">Close</button>
                                                </div>
                                                <div class="save">
                                                    <button class="bg-red-600 rounded-md p-2 ml-2" type="submit">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $watchlists->links() }}

    </div>
@endsection
