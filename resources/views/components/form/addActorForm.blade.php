<div class="mx-4">
    <h1 class="text-white text-3xl font-bold py-5">Add Actor</h1>

    <form action="{{ route('addActor.action') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input text-zinc-300">
            <p>Name</p>
            <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" name="name">
        </div>
        <div class="input text-zinc-300">
            <p>Gender</p>
            <select class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="gender" id="gender">
                <option value="null">-- Open this select menu --</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="input text-zinc-300">
            <p>Biography</p>
            <textarea name="biography" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text" rows="5"></textarea>
        </div>
        <div class="input text-zinc-300">
            <p>Date of Birth</p>
            <input name="dob" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="date">
        </div>
        <div class="input text-zinc-300">
            <p>Place of Birth</p>
            <input name="birthplace" class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" type="text">
        </div>
        <div class="input text-zinc-300">
            <p>Image Url</p>
            <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="img_url" type="file">
        </div>
        <div class="input text-zinc-300">
            <p>Popularity</p>
            <input class="w-full bg-primaryBlack py-2 px-3 my-4 rounded-sm" name="popularity" type="number"
                step="0.1">
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="text-red-600 text-sm">{{ $err }}</p>
            @endforeach
        @endif
        <div class="mt-4">
            <button type="submit" class="w-1/3 rounded-md bg-red-500 py-2 px-10 text-white">Create</button>
        </div>
    </form>
</div>
