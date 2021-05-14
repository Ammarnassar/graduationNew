<div>
    <ul class="post-comments p-0 m-0">
        @forelse($comments as $comment)
        <li class="mb-3">
            <div class="d-flex flex-wrap flex-column">
                <div class="flex-row d-flex align-items-center">
                    <div class="user-img">
                        <img src="{{$comment->user->avatar}}" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                    </div>
                    <div class="d-flex flex-column mx-2">
                        <h6 class="">{{$comment->user->name}}</h6>
                        <span style="font-size: 10px" >{{$comment->created_at->diffForHumans()}} </span>
                    </div>

                </div>
                <div class="comment-data-block ml-lg-2">
                    <p class="mb-2" style="line-break:anywhere">{{$comment->body}}</p>
                    <div class="d-flex flex-wrap align-items-center comment-activity">
                        <a href="" class="mx-2">{{__('Like')}}</a>
                        <a href="" class="mx-2">{{__('Reply')}}</a>
                        @if($comment->user->id == auth()->id())
                        <a class="text-danger mx-2" style="cursor: pointer" wire:click="deleteComment({{$comment->id}})">{{__('Delete')}}</a>
                        @endif
                    </div>
                </div>
            </div>
        </li>
        @empty

        @endforelse
    </ul>
</div>
