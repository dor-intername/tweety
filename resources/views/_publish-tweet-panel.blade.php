<div class="border border-blue-400 rounded-lg py-4 px-8">
    <form method="post" action="/tweets">
        @csrf
        <textarea placeholder="What's up doc?" name="body" class="bg-transparent w-full"></textarea>
        <hr class="my-3">
        <footer class="flex justify-between">
            <img class="mr-2 rounded-full" width="40" src="{{auth()->user()->avatar}}" alt="">
            <button class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white" type="submit">
                Tweet-a-roo!
            </button>
        </footer>
        @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
        @enderror
    </form>
</div>
