@forelse ($users as $user)
<div class="iq-card">
    <div class="iq-card-body profile-page p-0">
       <div class="profile-header-image">
          <div class="cover-container">
             <img src="{{ asset('temp/html/images/page-img/profile-bg1.jpg') }}"  alt="profile-bg" class="rounded img-fluid w-100">
          </div>
          <div class="profile-info p-4">
             <div class="user-detail">
                <div class="d-flex flex-wrap justify-content-between align-items-start">
                   <div class="profile-detail d-flex">
                      <div class="profile-img pr-4" style="margin-top: -4rem;">
                         <img src="{{$user->getAvatarAttribute()}}" alt="profile-img" class="avatar-130 img-fluid" />
                      </div>
                      <div class="user-data-block">
                         <h4 class="">{{$user->name}}</h4>
                         <h6>{{$user->university}}</h6>
                         <h6>{{$user->email}}</h6>
                          <h6>{{$user->city}}</h6>
                      </div>
                   </div>
                   <a href="profile/{{$user->id}}" class="btn btn-primary">{{__('Profile')}}</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@empty

@endforelse
