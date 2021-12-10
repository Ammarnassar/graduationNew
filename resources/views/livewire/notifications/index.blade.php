@forelse($notifications as $notification)
    <div class="iq-card">
<div class="iq-card-body">
    <ul class="notification-list m-0 p-0">

        <li class="d-flex align-items-center">
            <div class="user-img img-fluid"><img src="{{'storage/'.$notification->user->avatar}}}}" alt="story-img" class="rounded-circle avatar-40"></div>
            <div class="media-support-info ml-3 d-flex flex-row justify-content-between">
                <div style="margin-top: 9px;">
                    <h6>{{$notification->user->name}}</h6>
                    <h6>{{__($notification->text)}}</h6>
                </div>

                <p class="mb-0 d-none d-sm-block" style="margin-top: 17px;margin-right: 1rem;">{{$notification->created_at->diffForHumans()}}</p>
            </div>

            <div class="d-flex align-items-center">
                <a href="javascript:void();" class="mr-3 iq-notify iq-bg-primary rounded"><i class="ri-award-line"></i></a>
            </div>

        </li>


    </ul>
</div>
</div>
@empty
@endforelse
