<div>
    <div class="chat-searchbar mt-4">
        <div class="form-group chat-search-data m-0">
            <input type="text" class="form-control round" id="chat-search" placeholder="{{__('Search For Chat')}}">
            <i class="ri-search-line"></i>
        </div>
    </div>
    <div class="chat-sidebar-channel scroller mt-4 pl-3">
        <h5 class="">{{__('Your Chats')}}</h5>
        <ul class="iq-chat-ui nav flex-column nav-pills">
            @foreach($users as $user)
                <li>
                    <a  data-toggle="pill" href="#test">
                        <div class="d-flex align-items-center">
                            <div class="avatar mr-2">
                                <img src="{{asset('temp/images/user/05.jpg')}}" alt="chatuserimage" class="avatar-50 ">
                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                            </div>
                            <div class="chat-sidebar-name">
                                <h6 class="mb-0">Team Discussions</h6>
                                <span>Lorem Ipsum is</span>
                            </div>
                            <div class="chat-meta float-right text-center mt-2 mr-1">
                                <div class="chat-msg-counter bg-primary text-white">20</div>
                                <span class="text-nowrap">05 min</span>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
