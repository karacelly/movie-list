@extends('Layout.app')

@section('scripts')
    <title>
        My Watchlist
    </title>
@endsection

@section('content')
    <div class="container">
        <h1 class="text-red-600 font-bold text-3xl my-4">
            <i class="fas fa-bookmark"></i>
            <span class="text-white">
                My
            </span>
            Watchlist
        </h1>
        <div class="search-bar ">
            <form class="w-full bg-zinc-500 flex justify-between my-8 p-2 rounded-md" action="">
                <input class="bg-zinc-500 w-11/12" placeholder="Search your watchlist ..." type="text" name="query">
                <button class="text-gray-300" type="submit"><i class="fas fa-magnifying-glass"></i></button>
            </form>
        </div>

        <table class="w-full text-white text-left border-separate border-spacing-y-4">
            <tr>
                <th>Poster</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($watchlist as $w)
                <tr class="bg-zinc-800 ">
                    <td class="w-1/4">
                        <img class="w-1/3" src="{{ asset('/images/movies/img/' . $w->movie->img_url) }}" alt="No poster">
                    </td>
                    <td>
                        {{ $w->movie->title }}
                    </td>
                    <td>{{ $w->status }}</td>
                    <td>...</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
