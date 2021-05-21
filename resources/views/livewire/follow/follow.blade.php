<div>
    @if ($user_follow)
    <button class="btn btn-primary " wire:click="unfollow({{$user->id}})">
        {{__('Un Follow')}}
    </button>
    @else
    <button class="btn btn-primary " wire:click="follow({{$user->id}})">
	    {{__('Follow')}}
    </button>
    @endif

</div>
