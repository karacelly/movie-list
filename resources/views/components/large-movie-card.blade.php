<div
    class="flex justify-center flex-col mx-auto w-full container  cursor-pointer hover:-translate-y-2 transition duration-300 ease-linear">
    <div class="flex justify-center">
        <a href="{{ route('movie', $id) }}">
            <img src="{{ asset('/images/movies/image/' . $imgUrl) }}" alt="{{ $title }}"
                class="w-full rounded-md h-[500px] object-center object-cover">
        </a>
    </div>
    <div class="flex justify-start items-start flex-col">
        <h1 class="font-semibold text-white">
            {{ $title }}
        </h1>
        <h2 class="font-semibold text-gray-500">
            {{ date('d-m-Y', strtotime($releaseDate)) }}
        </h2>
    </div>
</div>
