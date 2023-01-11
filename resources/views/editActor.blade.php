@extends('Layout.app')

@section('scripts')
    <title>
        Edit Actor Page
    </title>
@endsection

@section('content')
    <div class="mx-4 px-8 py-5">
        <h1 class="text-white text-3xl font-bold py-5">Edit Actor</h1>

        <form action="{{ route('editActor.action', $actor) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input text-zinc-300">
                <p>Name</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="name"
                    value="{{ $actor->name }}">
            </div>
            <div class="input text-zinc-300">
                <p>Gender</p>
                <select class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="gender" id="gender">
                    <option value="null">-- Open this select menu --</option>
                    @if ($actor->gender === 'Male')
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                    @else
                        <option value="Male">Male</option>
                        <option value="Female" selected>Female</option>
                    @endif
                </select>
            </div>
            <div class="input text-zinc-300">
                <p>Biography</p>
                <textarea name="biography" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" rows="5">{{ $actor->biography }}</textarea>
            </div>
            <div class="input text-zinc-300">
                <p>Date of Birth</p>
                <input name="dob" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm"
                    value="{{ $actor->dob->format('Y-m-d') }}" type="date">
            </div>
            <div class="input text-zinc-300">
                <p>Place of Birth</p>
                <input name="birthplace" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm"
                    value="{{ $actor->birthplace }}" type="text">
            </div>
            <div class="input text-zinc-300">
                <p>Image Url</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="img_url" type="file"
                    value="{{ $actor->img_url }}">
            </div>
            <div class="input text-zinc-300">
                <p>Popularity</p>
                <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="popularity" type="number"
                    value="{{ $actor->popularity }}" step="0.1">
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
                <button type="submit" class="w-full rounded-md bg-red-500 py-2 px-10 text-white">Edit</button>
            </div>
        </form>
    </div>
@endsection
