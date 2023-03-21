<x-app-layout>

    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-full md:h-full">
        <div class="md:flex">
            <div class="md:shrink-0">


                <div class="card rounded-none">
                    <form action="{{route('profile.update')}}" method="post">

                        <div class="block font-medium text-lg text-black-700 ml-2 mb-2 mt-5">Update Your Profile</div>

                        @method("put")

                        @csrf

                        <div class="mb-5 ml-5">

                            <x-input-label for="username">Username</x-input-label>
                            <x-text-input value="{{old('username', Auth::user()->username)}}" class="mt-1 w-full" type="text" name="username" id="username" />

                            @error('username')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-5 ml-5">
                            <x-input-label for="email">Email</x-input-label>

                            <x-text-input value="{{old('email', Auth::user()->email)}}" class="mt-1 w-full" type="email" name="email" id="email" />
                            @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-5 ml-5">
                            <x-input-label for="name">Name</x-input-label>

                            <x-text-input value="{{old('name', Auth::user()->name)}}" class="mt-1 w-full" type="text" name="name" id="name" />
                            @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="ml-5 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-xl text-sm text-white capitalize tracking-widest hover:bg-blue-700 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>