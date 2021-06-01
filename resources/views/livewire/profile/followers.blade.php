<div class="iq-card-body">
    <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
        @forelse($users as $user)
            <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                <a href="javascript:void();">
                    <img src="{{$user->getAvatarAttribute()}}"
                         alt="gallary-image" class="w-100" /></a>
                <h6 class="mt-2 text-center">{{$user->first_name}}</h6>
            </li>
        @empty

        @endforelse
    </ul>
</div>
