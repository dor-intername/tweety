<x-app>

    <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>

            <input type="text" value="{{$user->name}}" name="name" id="name"  class="border border-gray-400 p-2 w-full">
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>

            <input type="text" value="{{$user->username}}" name="username" id="username"  class="border border-gray-400 p-2 w-full">
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
           <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">avatar</label>
            <div class="flex ">
            <input type="file" name="avatar" id="avatar"  class="border border-gray-400 p-2 w-full">
                <img src="{{$user->avatar}}" width="40" alt="">

                @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">email</label>

            <input type="email" value="{{$user->email}}" name="email" id="email"  class="border border-gray-400 p-2 w-full">
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>

            <input required type="password" name="password" id="password"  class="border border-gray-400 p-2 w-full">
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">password Confirmation</label>

            <input required type="password" name="password_confirmation" id="password_confirmation"  class="border border-gray-400 p-2 w-full">
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>

    </form>
</x-app>
