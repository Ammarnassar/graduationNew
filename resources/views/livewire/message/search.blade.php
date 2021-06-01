<div>
    <div class="chat-searchbar mt-4">
        <div class="form-group chat-search-data m-0">
            <input type="text" class="form-control round" id="chat-search" placeholder="{{__('Search For Users')}}" wire:model="search">
            <i class="ri-search-line"></i>
        </div>
    </div>
    <div class="chat-sidebar-channel scroller mt-4 pl-3">
        <h5 class="">{{__('Your Chats')}}</h5>
        <ul class="iq-chat-ui nav flex-column nav-pills">
            @foreach($users as $user)
                @if($user->id != auth()->id())
                <li>
                    <a  data-toggle="pill" href="#test">
                        <div class="d-flex align-items-center">
                            <div class="avatar mr-2">
                                <img src="{{$user->avatar}}" alt="chatuserimage" class="avatar-50 ">
                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                            </div>
                            <div class="chat-sidebar-name">
                                <h6 class="mb-0">{{$user->name}}</h6>
                                <span>{{$user->university}}</span>
                            </div>
                            <div class="chat-meta float-right text-center mt-2 mr-1">
                                <div class="chat-msg-counter bg-primary text-white">20</div>
                                <span class="text-nowrap">05 min</span>
                            </div>
                        </div>
                    </a>
                </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
