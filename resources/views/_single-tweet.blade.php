<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <a href="{{route('profile',$tweet->user)}}"><img class="mr-2 rounded-full" width="40" src="{{$tweet->user->avatar}}" alt=""></a>
    </div>

    <div>
        <h5 class="font-bold m-4">  <a href="{{route('profile',$tweet->user)}}">{{$tweet->user->name}}</a></h5>
        <p class="text-sm">{{$tweet->body}}</p>
    </div>
</div>
