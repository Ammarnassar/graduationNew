<div>
    <div id="content-page" class="content-page">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-3">
                    <div class="iq-card">
                        <div class="iq-card-body">
                            <div class="">
                                <div class="iq-email-list">
                                    <a href="{{route('send')}}" class="btn btn-primary btn-lg btn-block mb-3 font-size-16 p-3 text-white"><i class="ri-send-plane-line mr-2"></i>New Message</a>
                                    <div class="iq-email-ui nav flex-column nav-pills">
                                        <li class="nav-link active" role="tab" data-toggle="pill" href="#mail-inbox"><a href="index.html"><i class="ri-mail-line"></i>Inbox<span class="badge badge-primary ml-2">@if(auth()->user()->mails->count()){{auth()->user()->mails->count()}}  @endif</span></a></li>
                                        <li class="nav-link" role="tab" data-toggle="pill" href="#mail-starred"><a href="#"><i class="ri-star-line"></i>Starred</a></li>
                                        <li class="nav-link" role="tab" data-toggle="pill" href="#mail-snoozed"><a href="#"><i class="ri-time-line"></i>Snoozed</a></li>
                                        <li class="nav-link" role="tab" data-toggle="pill" href="#mail-draft"><a href="#"><i class="ri-file-list-2-line"></i>Draft</a></li>
                                        <li class="nav-link" role="tab" data-toggle="pill" href="#mail-sent"><a href="#"><i class="ri-mail-send-line"></i>Sent Mail</a></li>
                                        <li class="nav-link" role="tab" data-toggle="pill" href="#mail-trash"><a href="#"><i class="ri-delete-bin-line"></i>Trash <span class="badge badge-primary ml-2">@if(auth()->user()->trashs->count()){{auth()->user()->trashs->count()}}  @endif</span></a></li>
                                        <li class="nav-link" role="tab" data-toggle="pill" href="#mail-important"><a href="#"><i class="ri-bookmark-line"></i>Important <span class="badge badge-primary ml-2">@if($bookmarks_count){{$bookmarks_count}}  @endif</span></a></li>
                                        <li class="nav-link" role="tab" data-toggle="pill" href="#mail-spam"><a href="#"><i class="ri-spam-line"></i>Spam</a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mail-box-detail">
                    <div class="iq-card">
                        <div class="iq-card-body p-0">
                            <div class="">
                                <div class="iq-email-to-list p-3">
                                    <div class="d-flex justify-content-between">
                                        <ul>

                                            <li data-toggle="tooltip" data-placement="top" title="Reload"><a href="{{route('inbox')}}"><i class="ri-restart-line"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Archive"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Inbox"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Zoom"><a href="#"><i class="ri-drag-move-2-line"></i></a></li>
                                        </ul>
                                        <div class="iq-email-search d-flex">
                                            <form class="mr-3 position-relative">
                                                <div class="form-group mb-0">
                                                    <input type="text" wire:model="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search">
                                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                                </div>
                                            </form>
                                            <ul>
                                                <li class="mr-3">
                                                    {{$mails->links()}}
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="iq-email-listbox">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="mail-inbox" role="tabpanel">
                                            <ul class="iq-email-sender-list">

                                                @forelse($mails as $mail)
                                                <li class="iq-unread">
                                                    <div class="d-flex align-self-center">
                                                        <div class="iq-email-sender-info">

                                                            <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                            <a href="javascript: void(0);" class="iq-email-title">{{$mail->user->name}}</a>
                                                        </div>
                                                        <div class="iq-email-content">
                                                            <a href="javascript: void(0);" class="iq-email-subject">
                                                                {{substr($mail->body,0,80)}}
                                                            </a>
                                                            <div class="iq-email-date">{{$mail->created_at->diffForHumans()}}</div>
                                                        </div>
                                                        <ul class="iq-social-media">
                                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-time-line"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <div class="email-app-details">
                                                    <div class="iq-card">
                                                        <div class="iq-card-body p-0">
                                                            <div class="">
                                                                <div class="iq-email-to-list p-3">
                                                                    <div class="d-flex justify-content-between">
                                                                        <ul>
                                                                            <li class="mr-3">
                                                                                <a href="javascript: void(0);">
                                                                                    <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                                                </a>
                                                                            </li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a wire:click="delete('{{$mail->id}}')"><i class="ri-delete-bin-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a wire:click="important('{{$mail->id}}')"><i class="ri-bookmark-line"></i></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                                <hr class="mt-0">
                                                                <div class="iq-inbox-subject p-3">
                                                                    <h5 class="mt-0">{{$mail->subject}}</h5>
                                                                    <div class="iq-inbox-subject-info">
                                                                        <div class="iq-subject-info">
                                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                                            <div class="iq-subject-status align-self-center">
                                                                                <h6 class="mb-0">{{$mail->user->name}}<a href="dummy@SocialV.com"><dummy@SocialV.com></a></h6>
                                                                                <div class="dropdown">
                                                                                    <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        to Me
                                                                                    </a>
                                                                                    <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                                        <table class="iq-inbox-details">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td>from:</td>
                                                                                                <td>{{$mail->user->name}}</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td>to:</td>
                                                                                                <td>{{auth()->user()->name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>date:</td>
                                                                                                <td>{{$mail->created_at->format('l jS \of F Y h:i A')}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>subject:</td>
                                                                                                <td>{{$mail->subject}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>security:</td>
                                                                                                <td>Standard encryption</td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <span class="float-right align-self-center">{{$mail->created_at->format('l jS \of F Y h:i A')}}</span>
                                                                        </div>
                                                                        <div class="iq-inbox-body mt-5">
                                                                            <p>{{$mail->body}}</p>


                                                                        </div>
                                                                        <hr>
                                                                        <div class="attegement">
                                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                                            <ul>
                                                                                @forelse ($mail->files as $key =>$file)
                                                                                <li class="icon icon-attegment cursor-pointer">
                                                                                    <a  href="{{route('download',$file->id)}}"><i class="fa fa-file-text-o cursor-pointer" aria-hidden="true"></i> <span class="ml-1">{{$file->file_name}}</span></a>

                                                                                </li>
                                                                                @empty
                                                                                    <p class="">NO FILES</p>
                                                                                @endforelse


                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                    <p class="text-center">Empty mails</h1>
                                                @endforelse
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="mail-starred" role="tabpanel">
                                            <ul class="iq-email-sender-list">
                                                <li class="iq-unread">
                                                    <div class="d-flex align-self-center">
                                                        <div class="iq-email-sender-info">

                                                            <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                            <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                                        </div>
                                                        <div class="iq-email-content">
                                                            <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                            </a>
                                                            <div class="iq-email-date">11:49 am</div>
                                                        </div>
                                                        <ul class="iq-social-media">
                                                            <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-time-line"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>



                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="mail-snoozed" role="tabpanel">
                                            <ul class="iq-email-sender-list">

                                                <li class="iq-unread">
                                                    <div class="d-flex align-self-center">
                                                        <div class="iq-email-sender-info">

                                                            <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                            <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                                        </div>
                                                        <div class="iq-email-content">
                                                            <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                            </a>
                                                            <div class="iq-email-date">11:49 am</div>
                                                        </div>
                                                        <ul class="iq-social-media">
                                                            <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-time-line"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="mail-draft" role="tabpanel">
                                            <ul class="iq-email-sender-list">
                                                <li>
                                                    <div class="d-flex align-self-center">
                                                        <div class="iq-email-sender-info">

                                                            <span class="ri-star-line iq-star-toggle"></span>
                                                            <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                                        </div>
                                                        <div class="iq-email-content">
                                                            <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                            </a>
                                                            <div class="iq-email-date">11:49 am</div>
                                                        </div>
                                                        <ul class="iq-social-media">
                                                            <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-time-line"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                            <div class="tab-pane fade show " id="mail-sent" role="tabpanel">
                                                <ul class="iq-email-sender-list">

                                                    @forelse($sent_mails as $mail)
                                                    <li class="iq-unread">
                                                        <div class="d-flex align-self-center">
                                                            <div class="iq-email-sender-info">

                                                                <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                                <a href="javascript: void(0);" class="iq-email-title">{{$mail->user->name}}</a>
                                                            </div>
                                                            <div class="iq-email-content">
                                                                <a href="javascript: void(0);" class="iq-email-subject">
                                                                    {{substr($mail->body,0,80)}}
                                                                </a>
                                                                <div class="iq-email-date">{{$mail->created_at->diffForHumans()}}</div>
                                                            </div>
                                                            <ul class="iq-social-media">
                                                                 <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <div class="email-app-details">
                                                        <div class="iq-card">
                                                            <div class="iq-card-body p-0">
                                                                <div class="">
                                                                    <div class="iq-email-to-list p-3">
                                                                        <div class="d-flex justify-content-between">
                                                                            <ul>
                                                                                <li class="mr-3">
                                                                                    <a href="javascript: void(0);">
                                                                                        <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                                                    </a>
                                                                                </li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Delete"><a wire:click="delete('{{$mail->id}}')"><i class="ri-delete-bin-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-0">
                                                                    <div class="iq-inbox-subject p-3">
                                                                        <h5 class="mt-0">{{$mail->subject}}</h5>
                                                                        <div class="iq-inbox-subject-info">
                                                                            <div class="iq-subject-info">
                                                                                <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                                                <div class="iq-subject-status align-self-center">
                                                                                    <h6 class="mb-0">{{$mail->user->name}}<a href="dummy@SocialV.com"><dummy@SocialV.com></a></h6>
                                                                                    <div class="dropdown">
                                                                                        <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            to Me
                                                                                        </a>
                                                                                        <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                                            <table class="iq-inbox-details">
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>from:</td>
                                                                                                    <td>{{$mail->user->name}}</td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td>to:</td>
                                                                                                    <td>{{auth()->user()->name}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>date:</td>
                                                                                                    <td>{{$mail->created_at->format('l jS \of F Y h:i A')}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>subject:</td>
                                                                                                    <td>{{$mail->subject}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>security:</td>
                                                                                                    <td>Standard encryption</td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="float-right align-self-center">{{$mail->created_at->format('l jS \of F Y h:i A')}}</span>
                                                                            </div>
                                                                            <div class="iq-inbox-body mt-5">
                                                                                <p>{{$mail->body}}</p>


                                                                            </div>
                                                                            <hr>
                                                                            <div class="attegement">
                                                                                <h6 class="mb-2">ATTACHED FILES:</h6>
                                                                                <ul>
                                                                                    @forelse ($mail->files as $key =>$file)
                                                                                    <li class="icon icon-attegment cursor-pointer">
                                                                                        <a  href="{{route('download',$file->id)}}"><i class="fa fa-file-text-o cursor-pointer" aria-hidden="true"></i> <span class="ml-1">{{$file->file_name}}</span></a>

                                                                                    </li>
                                                                                    @empty
                                                                                        <p class="text-center">Empty</p>
                                                                                    @endforelse


                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty
                                                        <p class="text-center">Empty mails</h1>
                                                    @endforelse
                                                </ul>
                                            </div>

                                        <div class="tab-pane fade" id="mail-trash" role="tabpanel">
                                            <ul class="iq-email-sender-list">
                                                <ul class="iq-email-sender-list">

                                                    @forelse($trashs as $mail)
                                                    <li class="iq-unread">
                                                        <div class="d-flex align-self-center">
                                                            <div class="iq-email-sender-info">

                                                                <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                                <a href="javascript: void(0);" class="iq-email-title">{{$mail->user->name}}</a>
                                                            </div>
                                                            <div class="iq-email-content">
                                                                <a href="javascript: void(0);" class="iq-email-subject">
                                                                    {{substr($mail->body,0,80)}}
                                                                </a>
                                                                <div class="iq-email-date">{{$mail->deleted_at->diffForHumans()}}</div>
                                                            </div>
                                                            <ul class="iq-social-media">
                                                                 <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <div class="email-app-details">
                                                        <div class="iq-card">
                                                            <div class="iq-card-body p-0">
                                                                <div class="">
                                                                    <div class="iq-email-to-list p-3">
                                                                        <div class="d-flex justify-content-between">
                                                                            <ul>
                                                                                <li class="mr-3">
                                                                                    <a href="javascript: void(0);">
                                                                                        <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                                                    </a>
                                                                                </li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Delete"><a wire:click="forceDelete('{{$mail->id}}')"><i class="ri-delete-bin-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                                <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-0">
                                                                    <div class="iq-inbox-subject p-3">
                                                                        <h5 class="mt-0">{{$mail->subject}}</h5>
                                                                        <div class="iq-inbox-subject-info">
                                                                            <div class="iq-subject-info">
                                                                                <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                                                <div class="iq-subject-status align-self-center">
                                                                                    <h6 class="mb-0">{{$mail->user->name}}<a href="dummy@SocialV.com"><dummy@SocialV.com></a></h6>
                                                                                    <div class="dropdown">
                                                                                        <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            to Me
                                                                                        </a>
                                                                                        <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                                            <table class="iq-inbox-details">
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>from:</td>
                                                                                                    <td>{{$mail->user->name}}</td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td>to:</td>
                                                                                                    <td>{{auth()->user()->name}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>date:</td>
                                                                                                    <td>{{$mail->created_at->format('l jS \of F Y h:i A')}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>subject:</td>
                                                                                                    <td>{{$mail->subject}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>security:</td>
                                                                                                    <td>Standard encryption</td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="float-right align-self-center">{{$mail->created_at->format('l jS \of F Y h:i A')}}</span>
                                                                            </div>
                                                                            <div class="iq-inbox-body mt-5">
                                                                                <p>{{$mail->body}}</p>


                                                                            </div>
                                                                            <hr>
                                                                            <div class="attegement">
                                                                                <h6 class="mb-2">ATTACHED FILES:</h6>
                                                                                <ul>
                                                                                    @forelse ($mail->files as $key =>$file)
                                                                                    <li class="icon icon-attegment cursor-pointer">
                                                                                        <a href="{{route('download',$file->id)}}"><i class="fa fa-file-text-o cursor-pointer" aria-hidden="true"></i> <span class="ml-1">{{$file->file_name}}</span></a>
                                                                                    </li>
                                                                                    @empty
                                                                                        <p>Empty</p>
                                                                                    @endforelse


                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty
                                                        <p class="text-center">Empty trash</h1>
                                                    @endforelse
                                                </ul>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="mail-important" role="tabpanel">
                                            <ul class="iq-email-sender-list">

                                                @forelse($bookmarks as $mail)
                                                <li class="iq-unread">
                                                    <div class="d-flex align-self-center">
                                                        <div class="iq-email-sender-info">

                                                            <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                            <a href="javascript: void(0);" class="iq-email-title">{{$mail->user->name}}</a>
                                                        </div>
                                                        <div class="iq-email-content">
                                                            <a href="javascript: void(0);" class="iq-email-subject">
                                                                {{substr($mail->body,0,80)}}
                                                            </a>
                                                            <div class="iq-email-date">{{$mail->created_at->diffForHumans()}}</div>
                                                        </div>
                                                        <ul class="iq-social-media">
                                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                            <li><a href="#"><i class="ri-time-line"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <div class="email-app-details">
                                                    <div class="iq-card">
                                                        <div class="iq-card-body p-0">
                                                            <div class="">
                                                                <div class="iq-email-to-list p-3">
                                                                    <div class="d-flex justify-content-between">
                                                                        <ul>
                                                                            <li class="mr-3">
                                                                                <a href="javascript: void(0);">
                                                                                    <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                                                </a>
                                                                            </li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a wire:click="delete('{{$mail->id}}')"><i class="ri-delete-bin-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a wire:click="important('{{$mail->id}}')"><i class="ri-bookmark-line"></i></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                                <hr class="mt-0">
                                                                <div class="iq-inbox-subject p-3">
                                                                    <h5 class="mt-0">{{$mail->subject}}</h5>
                                                                    <div class="iq-inbox-subject-info">
                                                                        <div class="iq-subject-info">
                                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                                            <div class="iq-subject-status align-self-center">
                                                                                <h6 class="mb-0">{{$mail->user->name}}<a href="dummy@SocialV.com"><dummy@SocialV.com></a></h6>
                                                                                <div class="dropdown">
                                                                                    <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        to Me
                                                                                    </a>
                                                                                    <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                                        <table class="iq-inbox-details">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td>from:</td>
                                                                                                <td>{{$mail->user->name}}</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td>to:</td>
                                                                                                <td>{{auth()->user()->name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>date:</td>
                                                                                                <td>{{$mail->created_at->format('l jS \of F Y h:i A')}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>subject:</td>
                                                                                                <td>{{$mail->subject}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>security:</td>
                                                                                                <td>Standard encryption</td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <span class="float-right align-self-center">{{$mail->created_at->format('l jS \of F Y h:i A')}}</span>
                                                                        </div>
                                                                        <div class="iq-inbox-body mt-5">
                                                                            <p>{{$mail->body}}</p>


                                                                        </div>
                                                                        <hr>
                                                                        <div class="attegement">
                                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                                            <ul>
                                                                                @forelse ($mail->files as $key =>$file)
                                                                                <li class="icon icon-attegment cursor-pointer">
                                                                                    <a  href="{{route('download',$file->id)}}"><i class="fa fa-file-text-o cursor-pointer" aria-hidden="true"></i> <span class="ml-1">{{$file->file_name}}</span></a>

                                                                                </li>
                                                                                @empty
                                                                                    <p class="">NO FILES</p>
                                                                                @endforelse


                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                    <p class="text-center">Empty mails</h1>
                                                @endforelse

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
