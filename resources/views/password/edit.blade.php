<x-app-layout>

    <div class="block font-medium text-lg text-black-700 ml-2 mb-2 mt-5">Change Password</div>


        <div class="flex ml-5">
            <div class="w-full lg:w-1/2">


                <x-card>
                    <form action="{{route('password.edit')}}" method="post">

                        @method("put")

                        @csrf

                        <div class="mb-5">
                            <x-input-label for="current_password">Current Password</x-input-label>

                            <x-text-input class="mt-1 w-full" type="password" name="current_password" id="current_password" />
                            @error('current_password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <x-input-label for="password">New Password</x-input-label>

                            <x-text-input class="mt-1 w-full" type="password" name="password" id="password" />
                            @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <x-input-label for="password_confirmation">Confirm Password</x-input-label>

                            <x-text-input class="mt-1 w-full" type="password" name="password_confirmation" id="password_confirmation" />
                            @error("password_confirmation")
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <x-primary-button>
                            Update
                        </x-primary-button>
                    </form>
                </x-card>
            </div>
        </div>

</x-app-layout>