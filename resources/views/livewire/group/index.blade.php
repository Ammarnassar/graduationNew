<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-body profile-page p-0">
                <div class="profile-header">
                    <form wire:submit.prevent="saveGroupPhoto">

                        <div class="cover-container ">
                            <img src="{{ asset('temp/html/images/page-img/profile-bg1.jpg') }}" alt="profile-bg"
                                class="rounded img-fluid ">
                            <ul class="header-nav d-flex flex-wrap justify-end px-2 m-0">
                                <li><a href=""><label for="coverPhoto"
                                            style="width: 40px;height: 40px;border-radius: 100%;"><i
                                                class="ri-pencil-line"></i></label></a></li>
                            </ul>

                        </div>
                        <input type="file" id="coverPhoto" name="coverPhoto" class="d-none" wire:model="coverPhoto">

                    </form>

                    <div class="user-detail text-center">

                        <div class="profile-detail" style="padding: 1.3rem;">
                            <h3 class="">{{ $group->group_name }}</h3>
                        </div>
                    </div>
                    <div
                        class="profile-info p-4 pt-0 d-flex align-items-center justify-content-between position-relative">
                        <div class="social-links text-center ">

                            <livewire:group.join :group="$group" />

                        </div>
                        <div class="social-info">
                            <ul
                                class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                <li class="text-center pl-3">
                                    <h6>{{ __('Members') }}</h6>
                                    <p class="mb-0">{{ $users->count() }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-card">
            <div class="iq-card-body p-0">
                <div class="user-tabing">
                    <ul
                        class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                        <li class="col-sm-3 p-0">
                            <a class="nav-link active" data-toggle="pill" href="#timeline">{{__('Home')}}</a>
                        </li>
                        <li class="col-sm-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#about">{{__('About')}}</a>
                        </li>
                        <li class="col-sm-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#friends">{{__('Members')}}</a>
                        </li>
                        <li class="col-sm-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#photos">{{__('Photos')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                <div class="iq-card-body p-0">
                    <div class="row flex-lg-row-reverse flex-column-reverse">
                        <div class="col-lg-4">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <a href="#"><span
                                            class="badge badge-pill badge-primary font-weight-normal ml-auto mr-1"><i
                                                class="ri-star-line"></i></span> 27 Items for yoou</a>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Life Event</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <p class="m-0"><a href="javacsript:void();"> Create </a></p>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="event-post position-relative">
                                                <a href="javascript:void();"><img
                                                        src="{{ asset('temp/html/images/page-img/07.jpg') }}"
                                                        alt="gallary-image" class="img-fluid rounded"></a>
                                                <div class="job-icon-position">
                                                    <div class="job-icon bg-primary p-2 d-inline-block rounded-circle">
                                                        <i class="ri-briefcase-line"></i>
                                                    </div>
                                                </div>
                                                <div class="iq-card-body text-center p-2">
                                                    <h5>Started New Job at Apple</h5>
                                                    <p>January 24, 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="event-post position-relative">
                                                <a href="javascript:void();"><img
                                                        src="{{ asset('temp/html/images/page-img/06.jpg') }}"
                                                        alt="gallary-image" class="img-fluid rounded"></a>
                                                <div class="job-icon-position">
                                                    <div class="job-icon bg-primary p-2 d-inline-block rounded-circle">
                                                        <i class="ri-briefcase-line"></i>
                                                    </div>
                                                </div>
                                                <div class="iq-card-body text-center p-2">
                                                    <h5>Freelance Photographer</h5>
                                                    <p>January 24, 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Photos</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g1.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g2.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g3.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g4.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g5.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g6.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g7.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g8.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/page-img/g9.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Friends</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <p class="m-0"><a href="javacsript:void();">Add New </a></p>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('temp/html/images/user/05.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Anna Rexia</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/user/06.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Tara Zona</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/user/07.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Polly Tech</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/user/08.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Bill Emia</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/user/09.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Moe Fugga</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/user/10.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Hal Appeno </h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                            <a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/user/07.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Zack Lee</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                            <a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/user/06.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Terry Aki</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                            <a href="javascript:void();"><img
                                                    src="{{ asset('temp/html/images/user/05.jpg') }}"
                                                    alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Greta Life</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div id="post-modal-data" class="iq-card">

                                <livewire:group.newpost :group="$group" />

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="about" role="tabpanel">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="row">

                            <div class="col-md-9 pl-4">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="basicinfo" role="tabpanel">
                                        <h4>{{__('Group Information')}}</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-3">
                                                <h6>{{__('University')}}</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">{{ $group->university_name }}</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>{{__('colleague')}}</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">{{ $group->Colleague }}</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>{{__('Description')}}</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">{{ $group->description }}</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="friends" role="tabpanel">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <h2 style="margin-bottom: 2rem;">{{__('All Members')}}</h2>
                        <div class="friend-list-tab mt-2">

                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            @forelse ($users as $user)
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                    <div class="iq-friendlist-block">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <a href="#">
                                                                    <img src="{{ $user->getAvatarAttribute() }}"
                                                                        alt="profile-img" class="img-fluid">
                                                                </a>
                                                                <div class="friend-info ml-3">
                                                                    <h5>{{ $user->name }}</h5>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @empty

                                            @endforelse


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="recently-add" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{ asset('temp/html/images/user/07.jpg') }}"
                                                                    alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Otto Matic</h5>
                                                                <p class="mb-0">4 friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2"
                                                                    id="dropdownMenuButton31" data-toggle="dropdown"
                                                                    aria-expanded="true" role="button">
                                                                    <i
                                                                        class="ri-check-line mr-1 text-white font-size-16"></i>
                                                                    Friend
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenuButton31">
                                                                    <a class="dropdown-item" href="#">Get
                                                                        Notification</a>
                                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                                    <a class="dropdown-item" href="#">Block</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{ asset('temp/html/images/user/08.jpg') }}"
                                                                    alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Moe Fugga</h5>
                                                                <p class="mb-0">16 friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2"
                                                                    id="dropdownMenuButton32" data-toggle="dropdown"
                                                                    aria-expanded="true" role="button">
                                                                    <i
                                                                        class="ri-check-line mr-1 text-white font-size-16"></i>
                                                                    Friend
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenuButton32">
                                                                    <a class="dropdown-item" href="#">Get
                                                                        Notification</a>
                                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                                    <a class="dropdown-item" href="#">Block</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="closefriends" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{ asset('temp/html/images/user/19.jpg') }}"
                                                                    alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Bud Wiser</h5>
                                                                <p class="mb-0">32 friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2"
                                                                    id="dropdownMenuButton39" data-toggle="dropdown"
                                                                    aria-expanded="true" role="button">
                                                                    <i
                                                                        class="ri-check-line mr-1 text-white font-size-16"></i>
                                                                    Friend
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenuButton39">
                                                                    <a class="dropdown-item" href="#">Get
                                                                        Notification</a>
                                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                                    <a class="dropdown-item" href="#">Block</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{ asset('temp/html/images/user/05.jpg') }}"
                                                                    alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Otto Matic</h5>
                                                                <p class="mb-0">9 friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2"
                                                                    id="dropdownMenuButton40" data-toggle="dropdown"
                                                                    aria-expanded="true" role="button">
                                                                    <i
                                                                        class="ri-check-line mr-1 text-white font-size-16"></i>
                                                                    Friend
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenuButton40">
                                                                    <a class="dropdown-item" href="#">Get
                                                                        Notification</a>
                                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                                    <a class="dropdown-item" href="#">Block</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="home" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{ asset('temp/html/images/user/18.jpg') }}"
                                                                    alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Paul Molive</h5>
                                                                <p class="mb-0">14 friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2"
                                                                    id="dropdownMenuButton49" data-toggle="dropdown"
                                                                    aria-expanded="true" role="button">
                                                                    <i
                                                                        class="ri-check-line mr-1 text-white font-size-16"></i>
                                                                    Friend
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenuButton49">
                                                                    <a class="dropdown-item" href="#">Get
                                                                        Notification</a>
                                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                                    <a class="dropdown-item" href="#">Block</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{ asset('temp/html/images/user/19.jpg') }}"
                                                                    alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Paige Turner</h5>
                                                                <p class="mb-0">8 friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2"
                                                                    id="dropdownMenuButton50" data-toggle="dropdown"
                                                                    aria-expanded="true" role="button">
                                                                    <i
                                                                        class="ri-check-line mr-1 text-white font-size-16"></i>
                                                                    Friend
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenuButton50">
                                                                    <a class="dropdown-item" href="#">Get
                                                                        Notification</a>
                                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                                    <a class="dropdown-item" href="#">Block</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="following" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{ asset('temp/html/images/user/05.jpg') }}"
                                                                    alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Maya Didas</h5>
                                                                <p class="mb-0">20 friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2"
                                                                    id="dropdownMenuButton54" data-toggle="dropdown"
                                                                    aria-expanded="true" role="button">
                                                                    <i
                                                                        class="ri-check-line mr-1 text-white font-size-16"></i>
                                                                    Friend
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenuButton54">
                                                                    <a class="dropdown-item" href="#">Get
                                                                        Notification</a>
                                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                                    <a class="dropdown-item" href="#">Block</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{ asset('temp/html/images/user/06.jpg') }}"
                                                                    alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Monty Carlo</h5>
                                                                <p class="mb-0">3 friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2"
                                                                    id="dropdownMenuButton55" data-toggle="dropdown"
                                                                    aria-expanded="true" role="button">
                                                                    <i
                                                                        class="ri-check-line mr-1 text-white font-size-16"></i>
                                                                    Friend
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenuButton55">
                                                                    <a class="dropdown-item" href="#">Get
                                                                        Notification</a>
                                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                                    <a class="dropdown-item" href="#">Block</a>
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
                </div>
            </div>
            <div class="tab-pane fade" id="photos" role="tabpanel">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <h2>{{__('Photos')}}</h2>
                        <div class="friend-list-tab mt-2">
                            <ul
                                class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                <li>
                                    <a class="nav-link active" data-toggle="pill" href="#photosofyou">Photos of You</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#your-photos">Your Photos</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{ asset('temp/html/images/page-img/51.jpg') }}"
                                                            class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i
                                                                            class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i
                                                                            class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i
                                                                            class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit or Remove"><i
                                                            class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{ asset('temp/html/images/page-img/52.jpg') }}"
                                                            class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i
                                                                            class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i
                                                                            class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i
                                                                            class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit or Remove"><i
                                                            class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{ asset('temp/html/images/page-img/53.jpg') }}"
                                                            class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i
                                                                            class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i
                                                                            class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i
                                                                            class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit or Remove"><i
                                                            class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{ asset('temp/html/images/page-img/54.jpg') }}"
                                                            class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i
                                                                            class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i
                                                                            class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i
                                                                            class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit or Remove"><i
                                                            class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="your-photos" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{ asset('temp/html/images/page-img/51.jpg') }}"
                                                            class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i
                                                                            class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i
                                                                            class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i
                                                                            class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit or Remove"><i
                                                            class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{ asset('temp/html/images/page-img/52.jpg') }}"
                                                            class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i
                                                                            class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i
                                                                            class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i
                                                                            class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit or Remove"><i
                                                            class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{ asset('temp/html/images/page-img/53.jpg') }}"
                                                            class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i
                                                                            class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i
                                                                            class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i
                                                                            class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit or Remove"><i
                                                            class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{ asset('temp/html/images/page-img/54.jpg') }}"
                                                            class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i
                                                                            class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i
                                                                            class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i
                                                                            class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit or Remove"><i
                                                            class="ri-edit-2-fill"></i></a>
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
    <div class="col-sm-12 text-center">
        <img src="{{ asset('temp/html/images/page-img/page-load-loader.gif') }}" alt="loader" style="height: 100px;">
    </div>
</div>
