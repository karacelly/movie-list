@extends('Layout.app')

@section('scripts')
    <title>
        Add Movie Page
    </title>
@endsection

@section('content')
    <div class="mx-4">
        <h1 class="text-white text-3xl font-bold py-5">Add Movie</h1>

        <form action="{{ route('addMovie.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input text-zinc-300">
                <p>Title</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="title">
            </div>
            <div class="input text-zinc-300">
                <p>Description</p>
                <textarea name="description" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" rows="5"></textarea>

            </div>
            <div class="input text-zinc-300">
                <p>Genre</p>
                <select class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="genre" id="genre">
                    <option value="null">Select an option</option>
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
                    <div class="flex flex-row justify-between">
                        <div class="left w-1/2 mr-2">
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
                        </div>
                    </div>
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
                <input name="release_date" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="date">
            </div>
            <div class="input text-zinc-300">
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
                <button type="submit" class="w-full rounded-md bg-red-500 py-2 px-10 text-white">Create</button>
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
