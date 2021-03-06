<x-app>
<header class="relative">
    <img src="/images/poster.jpeg" class="rounded-lg mb-6" alt="" style="height: 223px;width: 700px;max-width: unset!important;">

    <div class="flex justify-between items-center">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
            <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
        </div>

        <div class="flex">
           @can('edit',$user)
            <a href="{{$user->path('edit')}}" class="text-xs rounded-full text-black border border-gray-300 mr-2 py-2 px-2 text-white" type="submit">
                Edit Profile
            </a>
            @endcan
           <x-follow-btn :user="$user"></x-follow-btn>

        </div>
    </div>
<img style="width: 150px;left: calc(50% - 75px);top: 47%;" class="border border-black bg-black absolute mr-2 rounded-full"  src="{{$user->avatar}}" alt="">
</header>
    @include('_timeline',['tweets'=>$user->tweets])

</x-app>
