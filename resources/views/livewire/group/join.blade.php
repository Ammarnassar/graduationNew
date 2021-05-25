<div>
    @if($user_join)
        @if ($user_join && $group->admin === auth()->id())

        @else
            <button class="btn btn-primary " wire:click="unjoin">
                {{__('Un Join')}}
            </button>
        @endif
    @else
        <button class="btn btn-primary " wire:click="join">
            {{__('Join')}}
        </button>
    @endif

</div>
