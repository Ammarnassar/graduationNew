<div wire:poll>
    <div class="chat-head">
        <header class="d-flex justify-content-between align-items-center bg-white pt-3 pr-3 pb-3">
            <div class="d-flex align-items-center">
                <div class="sidebar-toggle">
                    <i class="ri-menu-3-line"></i>
                </div>
                <div class="avatar chat-user-profile m-0 mr-3">
                    <img src="{{$user->avatar}}" alt="avatar" class="avatar-50 ">
                    <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                </div>
                <h5 class="mb-0">{{$user->name}}</h5>
            </div>
            <div class="chat-user-detail-popup scroller">
                <div class="user-profile text-center">
                    <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                    <div class="user mb-4">
                        <a class="avatar m-0">
                            <img src="images/user/05.jpg" alt="avatar">
                        </a>
                        <div class="user-name mt-4">
                            <h4>Bni Jordan</h4>
                        </div>
                        <div class="user-desc">
                            <p>Cape Town, RSA</p>
                        </div>
                    </div>
                    <hr>
                    <div class="chatuser-detail text-left mt-4">
                        <div class="row">
                            <div class="col-6 col-md-6 title">Bni Name:</div>
                            <div class="col-6 col-md-6 text-right">Bni</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6 col-md-6 title">Tel:</div>
                            <div class="col-6 col-md-6 text-right">072 143 9920</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6 col-md-6 title">Date Of Birth:</div>
                            <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6 col-md-6 title">Gender:</div>
                            <div class="col-6 col-md-6 text-right">Male</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6 col-md-6 title">Language:</div>
                            <div class="col-6 col-md-6 text-right">Engliah</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-header-icons d-flex">
                <a href="javascript:void();" class="chat-icon-phone iq-bg-primary">
                    <i class="ri-phone-line"></i>
                </a>
                <a href="javascript:void();" class="chat-icon-video iq-bg-primary">
                    <i class="ri-vidicon-line"></i>
                </a>
                <a href="javascript:void();" class="chat-icon-delete iq-bg-primary">
                    <i class="ri-delete-bin-line"></i>
                </a>

            </div>
        </header>
    </div>
    <div class="chat-content scroller">
        @foreach($chats as $chat)
            @foreach($chat['messages'] as $message)
                @if($message->user_id == auth()->id())
                    <div class="chat">
                        <div class="chat-user">
                            <a class="avatar m-0">
                                <img src="{{auth()->user()->avatar}}" alt="avatar" class="avatar-35 ">
                            </a>
                            <span class="chat-time mt-1">{{$message->created_at->format('H:i')}}</span>
                        </div>
                        <div class="chat-detail">
                            <div class="chat-message">
                                <p>{{$message->body}}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="chat chat-left">
                        <div class="chat-user">
                            <a class="avatar m-0">
                                <img src="{{$message->user->avatar}}" alt="avatar" class="avatar-35 ">
                            </a>
                            <span class="chat-time mt-1">{{$message->created_at->format('H:i')}}</span>
                        </div>
                        <div class="chat-detail">
                            <div class="chat-message">
                                <p>{{$message['body']}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        @endforeach
    </div>
    <div class="chat-footer p-3 bg-white">
        <form class="d-flex align-items-center"  wire:submit.prevent="sendMessage">
            <div class="chat-attagement d-flex">
                <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
            </div>
            <input type="text" class="form-control mr-3" placeholder="{{__('Type your message')}}" wire:model="messageBody">
            <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="far fa-paper-plane"></i><span class="d-none d-lg-block ml-1">{{__('Send')}}</span></button>
        </form>
    </div>
</div>

