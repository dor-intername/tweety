@if(current_user()->isNot($user))
<form method="POST" action="/profiles/{{$user->name}}/follow">
    @csrf
    <button type="submit" class="bg-blue-500 text-xs rounded-full shadow py-2 px-2 text-white" type="submit">
        {{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>

    @endif
