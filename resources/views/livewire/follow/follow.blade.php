<div>
    @if ($user_follow)
    <button class="btn btn-primary " wire:click="unfollow({{$user->id}})">
        Un Follow
    </button>
    @else
    <button class="btn btn-primary " wire:click="follow({{$user->id}})">
        Follow
    </button>
    @endif

</div>
