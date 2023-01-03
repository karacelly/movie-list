<div
    class="flex justify-center flex-col  container w-[250px] cursor-pointer hover:-translate-y-2 transition duration-300 ease-linear">
    <div class="flex justify-center">
        <a href="{{ route('movie', $id) }}">
            <img src="{{ asset('/images/movies/image/' . $imgUrl) }}" alt="{{ $title }}"
                class="w-full rounded-md h-[400px] object-center object-cover" />
        </a>
    </div>
    <div class="flex justify-between items-start flex-col">
        <div class="flex justify-start flex-col">
            <h1 class="font-semibold text-white">
                {{ $title }}
            </h1>
        </div>
        <div class="flex justify-between w-full">
            <h2 class="font-semibold text-gray-500">
                {{ date('d-m-Y', strtotime($releaseDate)) }}
            </h2>
            @if (Auth::check() && Auth::user()->nonAdmin())
                <a href="" class="text-gray-500 flex justify-end items-end ">
                    <x-eos-add class="w-5 hover:scale-150 transition duration-75 ease-linear" />
                </a>
            @endif
        </div>
    </div>
</div>
