<ul class="bg-blue-100 rounded-lg p-4">
    <li>    <h3 class="font-bold text-xl mb-4">Friends</h3>
    </li>
    @foreach(auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <a href="{{route('profile',$user)}}"><img class="mr-2 rounded-full" width="40" src="{{$user->avatar}}" alt=""></a>
                <a href="{{route('profile',$user)}}"> {{$user->name}}</a>
            </div>
        </li>
    @endforeach
</ul>

