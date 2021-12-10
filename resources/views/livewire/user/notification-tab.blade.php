<div>
    @forelse ($notifications as $notification)
    <div class="iq-card">
    <div class="iq-card-body">
    <ul class="notification-list m-0 p-0">
    <li class="d-flex align-items-center">
        <div class="user-img img-fluid"><img src="{{$notification->user->avatar}}" alt="story-img" class="rounded-circle avatar-40"></div>
        <div class="media-support-info ml-3">
           <h6>{{$notification->user->name}} {{$notification->text}}</h6>
           <p class="mb-0">{{$notification->created_at->diffForHumans()}}</p>
        </div>
        <div class="d-flex align-items-center">
           <a href="javascript:void();" class="mr-3 iq-notify iq-bg-primary rounded"><i class="ri-award-line"></i></a>
           <div class="iq-card-header-toolbar d-flex align-items-center">
              <div class="dropdown">
                 <span class="dropdown-toggle" data-toggle="dropdown">
                 <i class="ri-more-fill"></i>
                 </span>
                 <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                 </div>
              </div>
           </div>
        </div>
     </li>
    </ul>
    </div>
    </div>
    @empty
     <p class="text-center">Empty</p>
    @endforelse

</div>
