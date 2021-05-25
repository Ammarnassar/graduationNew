<div class="iq-card shadow-none m-0">
    <div class="iq-card-body p-0 ">
        <div class="bg-primary p-3">
            <h5 class="mb-0 text-white">{{__('All Notifications')}}<small class="badge  badge-light float-right pt-1">{{auth()->user()->notifications->count()}}</small></h5>
        </div>
        @forelse($notifications as $notification)
        <a href="#" class="iq-sub-card" >
            <div class="media align-items-center">
                <div class="" style="margin-top: -3rem;">
                    <img class="avatar-40 rounded" src="{{$notification->user->getAvatarAttribute()}}" alt="">
                </div>
                <div class="media-body ml-3">
                    <h6 class="mb-0 ">{{$notification->user->first_name}}</h6>
                    <p>{{__($notification->text)}}</p>
                    <small class="float-right font-size-12" style="margin-top: -1rem;">{{$notification->created_at->diffForHumans()}}</small>
                </div>
            </div>
        </a>
        @empty


        @endforelse
        <a href="{{route('notifications')}}" class="iq-sub-card" style="border-bottom: 0;" >
            <div class="media align-items-center" style="border-bottom: 0;">
                <div class="media-body ml-3 text-center">
                    <h6 class="mb-0 ">{{__('Show All')}}</h6>
                </div>
            </div>
        </a>


    </div>
</div>
