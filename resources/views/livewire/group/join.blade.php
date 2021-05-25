<div>
    @if ($user_join)
    <button class="btn btn-primary " wire:click="unjoin">
        {{__('Un Join')}}
    </button>
    @else
    <button class="btn btn-primary " wire:click="join">
	    {{__('Join')}}
    </button>
    @endif
</div>
