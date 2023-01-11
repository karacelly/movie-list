@extends('Layout.app')

@section('scripts')
    <title>
        MovieList | Profile
    </title>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endsection

@section('content')
    <div class="container w-full mx-auto p-10">
        <div class="flex justify-center items-center">
            <h1 class="text-red-600 font-bold text-4xl">
                Update Profile
            </h1>
        </div>
    </div>

    <div class="container w-full mx-auto ">
        <div class="w-full flex mx-auto">
            <div class="max-w-md w-full flex justify-start flex-col items-center space-y-5">
                <h1 class="text-red-600 font-bold text-3xl ">
                    <span class="text-white">
                        My
                    </span>
                    Profile
                </h1>

                <button class="openModal">
                    @if (Auth::user()->image)
                        <div class="img rounded-full w-24 h-24 overflow-hidden">
                            <img class="w-full h-full object-cover rounded-full" src="{{ url(Auth::user()->image) }}" />
                        </div>
                    @else
                        <x-icomoon-user class="w-[100px] text-white" />
                    @endif
                </button>

                <div class="flex justify-center">
                    <h1 class="text-white text-2xl">
                        {{ Auth::user()->username }}
                    </h1>
                </div>

                <div class="flex justify-center">
                    <h1 class="text-white text-2xl">
                        {{ Auth::user()->email }}
                    </h1>
                </div>

            </div>

            <div class="w-full justify-center items-center">
                <form action="{{ route('update.profile') }}" method="POST"
                    class="flex justify-center items-center flex-col w-full space-y-7 text-xl font-semibold">
                    @csrf
                    <x-form.inputWrapper>
                        <label class="w-1/2">Username</label>

                        <input type="text" value="{{ Auth::user()->username }}" name="username"
                            class="w-full outline-none
                            border-none bg-transparent" />
                    </x-form.inputWrapper>
                    <x-form.inputWrapper
                        class="flex justify-center w-full text-white px-5 py-3 rounded-sm bg-primaryBlack focus-within:ring-1 ring-red-600">
                        <label class="w-1/2">Email</label>

                        <input type="email" value="{{ Auth::user()->email }}" name="email"
                            class="w-full outline-none
                            border-none bg-transparent" />
                    </x-form.inputWrapper>
                    <x-form.inputWrapper
                        class="flex justify-center w-full text-white px-5 py-3 rounded-sm bg-primaryBlack focus-within:ring-1 ring-red-600">
                        <label class="w-1/2">DOB</label>

                        <input type="date" name="dateOfBirth" value="{{ Auth::user()->dob }}"
                            class="w-full outline-none
                            border-none bg-transparent" />
                    </x-form.inputWrapper>
                    <x-form.inputWrapper
                        class="flex justify-center w-full text-white px-5 py-3 rounded-sm bg-primaryBlack focus-within:ring-1 ring-red-600">
                        <label class="w-1/2">Phone</label>

                        <input type="text" name="phone"
                            class="w-full outline-none
                            border-none bg-transparent"
                            value="{{ Auth::user()->phone }}" />
                    </x-form.inputWrapper>

                    <div
                        class="w-full
                            justify-center items-center text-center bg-red-500 py-2 rounded-sm hover:-translate-y-1
                            transition duration-150 ease-in cursor-pointer">
                        <button type="submit" class="text-white no-underline  font-semibold border-none outline-none">
                            Save Changes
                        </button>
                    </div>
                </form>
                @if (session('success'))
                    <p class="text-green-500 text-xl">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="text-red-500 text-xl">{{ $err }}</p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="modal invisible">
        <div class="absolute left-0 right-0 top-0 bottom-0 bg-black opacity-50 overflow-hidden">
        </div>
        <div class="absolute sm:top-40 md:top-80 lg:top-1/3 left-0 right-0">
            <div class="w-full flex justify-center items-center">
                <div class="w-1/2 bg-primaryBlack rounded-sm opacity-100 text-white p-5">
                    <div class="flex justify-between items-center pb-5">
                        <h2 class="text-white text-xl  ">Update Image</h2>
                        <button class="closeModal">X</button>
                    </div>
                    <form action="{{ route('update.image') }}" class="m-0" method="post">
                        @csrf
                        <input class="w-full p-2 rounded-md text-black" type="text" name="img_url"
                            placeholder="Image Url">
                        <p class="py-2">Please upload your image to other sources first and use the url</p>
                        <div class="flex justify-end items-center pt-3">
                            <div class="close">
                                <button type="button" class="bg-gray-400 rounded-md p-2 closeModal">Close</button>
                            </div>
                            <div class="save">
                                <button class="bg-red-600 rounded-md p-2 ml-2" type="submit">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
