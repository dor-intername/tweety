<div class="border border-gray-300 rounded-lg mt-4">
    @forelse($tweets as $tweet)
        @include('_single-tweet')
    @empty
        <p class="p-4">No Tweets yes ..</p>

    @endforelse

</div>
