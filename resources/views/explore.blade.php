<x-app>
<div>

    @foreach($users as $user)
<div class="flex items-center mb-5">

    <a href="{{$user->path()}}"> <img  class="mr-4 rounded" alt="{{$user->username}}" width="65" src="{{$user->avatar}}" alt=""></a>

    <div>
        <h4 class="font-bold">{{'@'.$user->username}}</h4>
    </div>
</div>

    @endforeach
{{$users->links()}}
</div>

</x-app>
