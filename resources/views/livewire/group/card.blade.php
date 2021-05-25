@forelse ($groups as $group)
    <div class="col-md-6 col-lg-4">
        <div class="iq-card">
            <div class="top-bg-image">
                <img src="{{ asset('temp/html/images/page-img/profile-bg1.jpg') }}" class="img-fluid w-100"
                    alt="group-bg">
            </div>
            <div class="iq-card-body text-center">

                <div class="group-info pt-3 pb-3">
                    <h4>{{ $group->group->group_name }}</h4>
                    <p>{{__($group->group->university_name)}}</p>
                </div>
                <div class="group-details d-inline-block pb-3">
                    <ul class="d-flex align-items-center justify-content-between list-inline m-0 p-0">
                        <li class="pl-3 pr-3">
                            <p class="mb-0">{{__('Posts')}}</p>
                            <h6>{{ $group->group->posts->count() }}</h6>
                        </li>
                        <li class="pl-3 pr-3">
                            <p class="mb-0">{{__('Members')}}</p>
                            <h6>{{ $group->group->users->count() }}</h6>
                        </li>
                        <li class="pl-3 pr-3">
                            <p class="mb-0">{{__('Media')}}</p>
                            <h6>{{ $group->group->users->count() }}</h6>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('group.show', $group->group_id) }}"
                    class="btn btn-primary d-block w-100 text-white">{{__('Show')}}</a>
            </div>
        </div>
    </div>
@empty

@endforelse
