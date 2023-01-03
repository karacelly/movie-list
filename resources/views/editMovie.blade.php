@extends('Layout.app')

@section('scripts')
    <title>
        Edit Movie Page
    </title>
@endsection

@section('content')
    <div class="mx-4 px-8 py-5">
        <h1 class="text-white text-3xl font-bold py-5">Edit Movie</h1>

        <form action="{{ route('editMovie.action', $movie) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input text-zinc-300">
                <p>Title</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="title"
                    value="{{ $movie->title }}">
            </div>
            <div class="input text-zinc-300">
                <p>Description</p>
                <textarea name="description" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" rows="5">{{ $movie->description }}</textarea>

            </div>
            <div class="input text-zinc-300">
                <p>Genre</p>
                <select class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="genre" id="genre">
                    <option value="null">-- Open this select menu --</option>
                    <option value="Crime">Crime</option>
                    <option value="Drama">Drama</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="History">History</option>
                    <option value="Horror">Horror</option>
                    <option value="Family">Family</option>
                </select>
            </div>
            <div class="input text-zinc-300 ">
                <p>Actors</p>
                <div class="my-3" id="addActor">
                    @foreach ($movie->actors as $char)
                    <div class="flex flex-row justify-between">
                        <div class="left w-1/2 mr-2">
                            <p>Actor</p>
                            <select name="actor" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm">
                                <option value="null">-- Open this select menu --</option>
                                @foreach ($actors as $a)
                                    @if ($a->id == $char->actor->id)
                                    <option selected value={{ $a->id }}>{{ $a->name }}</option>
                                    @else
                                    <option value={{ $a->id }}>{{ $a->name }}</option>

                                    @endif

                                @endforeach
                            </select>
                        </div>
                        <div class="right w-1/2 ml-2">
                            <p>Character Name</p>
                            <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="char" value="{{$char->character}}">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="my-3">
                    <div class="flex justify-end">
                        <button type="button" id="addButton" class="bg-blue-600 text-white py-1 px-3 rounded-sm ">Add
                            More</button>
                    </div>
                </div>
            </div>
            <div class="input text-zinc-300">
                <p>Director</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="director">
            </div>

            <div class="input text-zinc-300">
                <p>Release Date</p>
                <input name="release_date" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="date"
                    value="{{ $movie->release_date->format('Y-m-d') }}>
            </div>
            <div class="input
                    text-zinc-300">
                <p>Image Url</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="img_url" type="file">
            </div>
            <div class="input text-zinc-300">
                <p>Background Url</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="background_url" type="file">
            </div>
            @if (session('success'))
                <p class="text-green-500 text-xl">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="text-red-600 text-sm">{{ $err }}</p>
                @endforeach
            @endif
            <div class="mt-4">
                <button type="submit" class="w-1/3 rounded-md bg-red-500 py-2 px-10 text-white">Edit</button>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var addButton = $('#addButton');
            var wrapper = $('#addActor');
            var html =
                `<div class="left w-1/2 mr-2">
                    <p>Actor</p>
                    <select name="actor" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm">
                        <option value="null">-- Open this select menu --</option>
                        @foreach ($actors as $a)
                            <option value={{ $a->id }}>{{ $a->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="right w-1/2 ml-2">
                    <p>Character Name</p>
                    <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="char">
                </div>`;
            var x = 1;

            $(addButton).click(function() {
                x++;
                $(wrapper).append(html);
            });
        });
    </script>
@endsection
