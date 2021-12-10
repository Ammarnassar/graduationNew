<div>
    <div class="iq-card-body p-0 ">
        <div class="bg-primary p-3">
            <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">{{$notifications->count()}}</small></h5>
        </div>
        @forelse ($notifications as $notification)
        <a href="#" class="iq-sub-card" >
            <div class="media align-items-center">
                <div class="">
                    <img class="avatar-40 rounded" src="{{$notification->user->avatar}}" alt="">
                </div>
                <div class="media-body ml-3">
                    <h6 class="mb-0 ">{{$notification->user->name}}</h6>
                    <small class="float-right font-size-12">{{$notification->created_at->diffForHumans()}}</small>
                    <p class="mb-0">{{$notification->text}}</p>
                </div>
            </div>
        </a>
        @empty
            <p></p>
        @endforelse

    </div>
</div>
