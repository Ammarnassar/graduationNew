<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-body profile-page p-0">
                <div class="profile-header">
                    <div class="cover-container ">
                        <img src="{{asset('temp/html/images/page-img/profile-bg1.jpg')}}" alt="profile-bg" class="rounded img-fluid " >
                        <ul class="header-nav d-flex flex-wrap justify-end px-2 m-0">
                            <li><a href=""><i class="ri-pencil-line"></i></a></li>
                        </ul>
                    </div>
                    <div class="user-detail text-center">
                        <form wire:submit.prevent="saveProfilePhoto">
                        <div class="profile-img ">

                                @if($profilePhoto )

                                    <div class="profilePhoto position-relative mx-auto">
                                        <img src="{{$profilePhoto->temporaryUrl()}}" alt="profile-img" class="avatar-130 img-fluid w-100 h-100"/>
                                        <label for="profilePhoto">
                                            <button type="submit" class="p-0 border-0 icon-circle btn btn-success position-absolute text-white" style="z-index:10 ;bottom: -5px ; margin-right: -70px ;cursor: pointer"><i class="ri-check-line"></i></button>
                                        </label>
                                    </div>

                                @else
                                    <div class="profilePhoto position-relative mx-auto">
                                        <img src="{{$user->avatar}}" alt="profile-img" class="avatar-130 img-fluid w-100 h-100" />
                                        @if(auth()->id() == $user->id)
                                        <label for="profilePhoto">
                                            <a class="icon-circle position-absolute bg-primary text-white" style="z-index:10 ;bottom: -5px ; margin-right: -70px ;cursor: pointer"><i class="ri-pencil-line"></i></a>
                                        </label>
                                        @endif
                                    </div>
                                @endif



                            <input type="file" id="profilePhoto" name="profilePhoto" class="d-none" wire:model="profilePhoto">

                        </div>
                        </form>
                        <div class="profile-detail">
                            <h3 class="">{{$user->name}}</h3>
                        </div>
                    </div>
                    <div class="profile-info p-4 pt-0 d-flex align-items-center justify-content-between position-relative">
                        <div class="social-links text-center ">
                            @if(auth()->id() !== $user->id)
                                <livewire:follow.follow :user="$user"/>
                            @else
                                <a class="btn btn-link bg-primary text-white p-3" style="text-decoration: none" href="{{route('user.profile.edit')}}" >
                                    {{__('Edit Profile')}}
                                </a>
                            @endif
                        </div>
                        <div class="social-info">
                            <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                <li class="text-center pl-3">
                                    <h6>{{__('Posts')}}</h6>
                                    <p class="mb-0">{{$user->posts->count()}}</p>
                                </li>
                                <li class="text-center pl-3">
                                    <h6>{{__('Followers')}}</h6>
                                    <p class="mb-0">{{$user->followers->count()-1}}</p>
                                </li>
                                <li class="text-center pl-3">
                                    <h6>{{__('Following')}}</h6>
                                    <p class="mb-0">{{$user->following->count()-1}}</p>
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
                    <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                        <li class="col-sm-3 p-0">
                            <a class="nav-link active" data-toggle="pill" href="#timeline">{{__('Timeline')}}</a>
                        </li>
                        <li class="col-sm-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#about">{{__('About')}}</a>
                        </li>
                        <li class="col-sm-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#friends">{{__('Friends')}}</a>
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
                                    <a href="#"><span class="badge badge-pill badge-primary font-weight-normal ml-auto mr-1"><i class="ri-star-line"></i></span> 27 Items for yoou</a>
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
                                                <a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/07.jpg')}}" alt="gallary-image" class="img-fluid rounded"></a>
                                                <div class="job-icon-position">
                                                    <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line"></i></div>
                                                </div>
                                                <div class="iq-card-body text-center p-2">
                                                    <h5>Started New Job at Apple</h5>
                                                    <p>January 24, 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="event-post position-relative">
                                                <a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/06.jpg')}}" alt="gallary-image" class="img-fluid rounded"></a>
                                                <div class="job-icon-position">
                                                    <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line"></i></div>
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
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g1.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g2.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g3.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g4.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g5.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g6.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g7.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g8.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img src="{{asset('temp/html/images/page-img/g9.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
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
                                                <img src="{{asset('temp/html/images/user/05.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Anna Rexia</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img src="{{asset('temp/html/images/user/06.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Tara Zona</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img src="{{asset('temp/html/images/user/07.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Polly Tech</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img src="{{asset('temp/html/images/user/08.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Bill Emia</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img src="{{asset('temp/html/images/user/09.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Moe Fugga</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                            <a href="javascript:void();"><img src="{{asset('temp/html/images/user/10.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Hal Appeno </h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                            <a href="javascript:void();"><img src="{{asset('temp/html/images/user/07.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Zack Lee</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                            <a href="javascript:void();"><img src="{{asset('temp/html/images/user/06.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Terry Aki</h6>
                                        </li>
                                        <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                            <a href="javascript:void();"><img src="{{asset('temp/html/images/user/05.jpg')}}" alt="gallary-image" class="img-fluid" /></a>
                                            <h6 class="mt-2">Greta Life</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div id="post-modal-data" class="iq-card">
                                @if($user->id == @auth()->id())
                                    <livewire:post.new-post />
                                @endif
                            </div>
                            <livewire:post.index :posts="$posts"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="about" role="tabpanel">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                    <li>
                                        <a class="nav-link active" data-toggle="pill" href="#basicinfo">Contact and Basic Info</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" data-toggle="pill" href="#family">Family and Relationship</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" data-toggle="pill" href="#work">Work and Education</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" data-toggle="pill" href="#lived">Places You've Lived</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" data-toggle="pill" href="#details">Details About You</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9 pl-4">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="basicinfo" role="tabpanel">
                                        <h4>Contact Information</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-3">
                                                <h6>Email</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">Bnijohn@gmail.com</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>Mobile</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">(001) 4544 565 456</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>Address</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">United States of America</p>
                                            </div>
                                        </div>
                                        <h4 class="mt-3">Websites and Social Links</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-3">
                                                <h6>Website</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">www.bootstrap.com</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>Social Link</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">www.bootstrap.com</p>
                                            </div>
                                        </div>
                                        <h4 class="mt-3">Basic Information</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-3">
                                                <h6>Birth Date</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">24 January</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>Birth Year</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">1994</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>Gender</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">Female</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>interested in</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">Designing</p>
                                            </div>
                                            <div class="col-3">
                                                <h6>language</h6>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0">English, French</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="family" role="tabpanel">
                                        <h4 class="mb-3">Relationship</h4>
                                        <ul class="suggestions-lists m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Add Your Relationship Status</h6>
                                                </div>
                                            </li>
                                        </ul>
                                        <h4 class="mt-3 mb-3">Family Members</h4>
                                        <ul class="suggestions-lists m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Add Family Members</h6>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Paul Molive</h6>
                                                    <p class="mb-0">Brothe</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Anna Mull</h6>
                                                    <p class="mb-0">Sister</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Paige Turner</h6>
                                                    <p class="mb-0">Cousin</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="work" role="tabpanel">
                                        <h4 class="mb-3">Work</h4>
                                        <ul class="suggestions-lists m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Add Work Place</h6>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Themeforest</h6>
                                                    <p class="mb-0">Web Designer</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>iqonicdesign</h6>
                                                    <p class="mb-0">Web Developer</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>W3school</h6>
                                                    <p class="mb-0">Designer</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                        </ul>
                                        <h4 class="mb-3">Professional Skills</h4>
                                        <ul class="suggestions-lists m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Add Professional Skills</h6>
                                                </div>
                                            </li>
                                        </ul>
                                        <h4 class="mt-3 mb-3">College</h4>
                                        <ul class="suggestions-lists m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Add College</h6>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Lorem ipsum</h6>
                                                    <p class="mb-0">USA</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="lived" role="tabpanel">
                                        <h4 class="mb-3">Current City and Hometown</h4>
                                        <ul class="suggestions-lists m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Georgia</h6>
                                                    <p class="mb-0">Georgia State</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="{{asset('')}}temp/html/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Atlanta</h6>
                                                    <p class="mb-0">Atlanta City</p>
                                                </div>
                                                <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                            </li>
                                        </ul>
                                        <h4 class="mt-3 mb-3">Other Places Lived</h4>
                                        <ul class="suggestions-lists m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Add Place</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="details" role="tabpanel">
                                        <h4 class="mb-3">About You</h4>
                                        <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                                        <h4 class="mt-3 mb-3">Other Name</h4>
                                        <p>Bini Rock</p>
                                        <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
                        <h2>Friends</h2>
                        <div class="friend-list-tab mt-2">
                            <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                <li>
                                    <a class="nav-link active" data-toggle="pill" href="#all-friends">All Friends</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#recently-add">Recently Added</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#closefriends">Close friends</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#home">Home/Town</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#following">Following</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{asset('temp/html/images/user/05.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Petey Cruiser</h5>
                                                                <p class="mb-0">15  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                                                <img src="{{asset('temp/html/images/user/06.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Anna Sthesia</h5>
                                                                <p class="mb-0">50  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton02" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                <div class="tab-pane fade" id="recently-add" role="tabpanel">
                                    <div class="iq-card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#">
                                                                <img src="{{asset('temp/html/images/user/07.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Otto Matic</h5>
                                                                <p class="mb-0">4  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton31" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton31">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                                                <img src="{{asset('temp/html/images/user/08.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Moe Fugga</h5>
                                                                <p class="mb-0">16  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton32" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton32">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                                                <img src="{{asset('temp/html/images/user/19.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Bud Wiser</h5>
                                                                <p class="mb-0">32  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton39" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton39">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                                                <img src="{{asset('temp/html/images/user/05.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Otto Matic</h5>
                                                                <p class="mb-0">9  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton40" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton40">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                                                <img src="{{asset('temp/html/images/user/18.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Paul Molive</h5>
                                                                <p class="mb-0">14  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton49" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton49">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                                                <img src="{{asset('temp/html/images/user/19.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Paige Turner</h5>
                                                                <p class="mb-0">8  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton50" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton50">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                                                <img src="{{asset('temp/html/images/user/05.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Maya Didas</h5>
                                                                <p class="mb-0">20  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton54" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton54">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                                                                <img src="{{asset('temp/html/images/user/06.jpg')}}" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                                <h5>Monty Carlo</h5>
                                                                <p class="mb-0">3  friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton55" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton55">
                                                                    <a class="dropdown-item" href="#">Get Notification</a>
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
                        <h2>Photos</h2>
                        <div class="friend-list-tab mt-2">
                            <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
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
                                                        <img src="{{asset('temp/html/images/page-img/51.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{asset('temp/html/images/page-img/52.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{asset('temp/html/images/page-img/53.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{asset('temp/html/images/page-img/54.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
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
                                                        <img src="{{asset('temp/html/images/page-img/51.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{asset('temp/html/images/page-img/52.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{asset('temp/html/images/page-img/53.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3">
                                                <div class="user-images position-relative overflow-hidden">
                                                    <a href="#">
                                                        <img src="{{asset('temp/html/images/page-img/54.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                                    </a>
                                                    <div class="image-hover-data">
                                                        <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                                <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                                <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
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
        <img src="{{asset('temp/html/images/page-img/page-load-loader.gif')}}" alt="loader" style="height: 100px;">
    </div>
</div>
