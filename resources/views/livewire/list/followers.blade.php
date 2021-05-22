
@forelse ($users as $user)
<div class="iq-card">
    <div class="iq-card-body profile-page p-0">
       <div class="profile-header-image">
          <div class="cover-container">
             <img src="images/page-img/profile-bg2.jpg" alt="profile-bg" class="rounded img-fluid w-100">
          </div>
          <div class="profile-info p-4">
             <div class="user-detail">
                <div class="d-flex flex-wrap justify-content-between align-items-start">
                   <div class="profile-detail d-flex">
                      <div class="profile-img pr-4" style="margin-top: -9px;">
                         <img src="{{$user->getAvatarAttribute()}}" alt="profile-img" class="avatar-130 img-fluid" />
                      </div>
                      <div class="user-data-block">
                         <h4 class="">{{$user->name}}</h4>
                         <h6>@designer</h6>
                         <p>Lorem Ipsum is simply dummy text of the</p>
                      </div>
                   </div>
                   <a href="profile/{{$user->id}}" class="btn btn-primary">Visit</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@empty
    
@endforelse