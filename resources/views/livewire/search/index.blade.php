<div class="iq-search-bar w-100 d-block mt-0 px-0">
    <form class="searchbox w-100 iq-card shadow p-3">

        <input type="text" class="text search-input mt-0 w-100" wire:model="search" placeholder="{{__('Search for persons , posts , trends , groups ...')}}">

        <a class="search-link text-center mx-2 " style="margin-top: 1.2rem"><i class="bi bi-search "></i></a>
    </form>


    <div class=" p-0">
        <ul class="nav iq-card nav-tabs p-0 w-100 d-flex justify-content-around align-items-center" id="myTab" role="tablist">
            <li class="nav-item text-center " role="presentation" style="width: 33.3%">
                <a class="nav-link active py-3 "  id="users-tab" data-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true">{{__('Users')}}</a>
            </li>
            <li class="nav-item text-center " role="presentation" style="width: 33.3%">
                <a class="nav-link py-3" id="posts-tab" style="border-bottom-width: 3px !important;" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="false">{{__('Posts')}}</a>
            </li>
            <li class="nav-item text-center " role="presentation" style="width: 33.3%">
                <a class="nav-link py-3" id="groupsSearch-tab" style="border-bottom-width: 3px !important;" data-toggle="tab" href="#groupsSearch" role="tab" aria-controls="groupsSearch" aria-selected="false">{{__('Groups')}}</a>
            </li>
        </ul>
        <div class="tab-content " id="myTabContent">
            <div class="tab-pane @if($users['items'] && $search) bg-white shadow rounded @endif fade show active py-4 px-3 px-md-5" id="users" role="tabpanel" aria-labelledby="users-tab">
                @if($search)
                    @forelse($users as $user)
                        @if($user->id != auth()->id())
                        <div class="media align-items-center mb-4 border-bottom pb-3">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{$user->avatar}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="{{route('user.profile' , $user->id)}}">{{$user->name}}</a></h6>
                                <p class="mb-0">{{__($user->university)}}</p>
                            </div>
                            <div>
                                @if(in_array($user->id , auth()->user()->following->pluck('id')->toArray()))
                                    <i class="ri-user-follow-fill" style="font-size: 20px"></i>
                                @else
                                    <i class="ri-user-add-line" style="font-size: 20px"></i>
                                @endif
                            </div>

                        </div>
                        @endif
                    @empty
                        <div class="text-center">
                            <span>
                                {{__('Sorry, we did not find any user that match this search')}}
                                <i class="fas fa-user-slash mx-2"></i>
                            </span>
                        </div>
                    @endforelse
                    <div class="d-flex justify-content-center align-items-center">
                        {{ $users->links() }}
                    </div>
                @else
                    <div class="text-center">
                        {{__('You are not searching for anything')}}
                    </div>
                @endif
            </div>
            <div class="tab-pane fade py-3"  id="posts" role="tabpanel" aria-labelledby="posts-tab">
                @if($search)
                    @forelse($posts as $post)
                        <livewire:post.simple-card :post="$post" />
                    @empty
                        <div class="text-center">
                            <span class="">
                                {{__('Sorry, we did not find any post that match this search')}}
                                <i class="fas fa-comment-slash mx-2"></i>
                            </span>
                        </div>
                    @endforelse
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $posts->links() }}
                        </div>
                @else
                    <div class="text-center">
                        {{__('You are not searching for anything')}}
                    </div>
                @endif
            </div>
            <div class="tab-pane fade py-3 d-flex flex-column flex-md-row @if($groups['items'] && $search) justify-content-between @else justify-content-center @endif flex-wrap align-items-center" id="groupsSearch" role="tabpanel" aria-labelledby="groupsSearch-tab">
                @if($search)
                    @forelse($groups as $group)
                        <div class="iq-card col-md-4 p-0 mt-4 mt-md-2" style="max-width: 300px ; height: 340px">
                            <div class="top-bg-image">
                                <img src="{{asset('temp/images/page-img/profile-bg1.jpg')}}" class="img-fluid w-100" alt="group-bg">
                            </div>
                            <div class="iq-card-body text-center">
                                <div class="group-info pt-3 pb-3">
                                    <h4>{{$group->group_name}}</h4>
                                    <p>{{substr($group->description, 0 , 50)}}</p>
                                </div>
                                <div class="group-details d-inline-block pb-3">
                                    <ul class="d-flex align-items-center justify-content-between list-inline m-0 p-0">
                                        <li class="pl-3 pr-3">
                                            <p class="mb-0">Post</p>
                                            <h6>600</h6>
                                        </li>
                                        <li class="pl-3 pr-3">
                                            <p class="mb-0">Member</p>
                                            <h6>{{$group->users->count()}}</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-member mb-3">
                                    <div class="iq-media-group">
                                        @foreach($group->users->take(6) as $user)
                                        <a href="{{route('user.profile' , $user->id)}}" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{$user->avatar}}" alt="">
                                        </a>
                                        @endforeach
                                    </div>
                                </div>

                                @if(in_array($group->id , auth()->user()->allGroups))
                                    <a type="submit" href="{{route('group.show' , $group->id)}}" class="btn btn-primary btn-link text-white d-block w-100">{{__('Show')}}</a>
                                @else
                                    <a type="submit" class="btn btn-primary btn-link text-white d-block w-100">{{__('Join')}}</a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="text-center">
                            <span class="">
                                {{__('Sorry, we did not find any group that match this search')}}
                                <i class="fas fa-users-slash mx-2"></i>
                            </span>
                        </div>
                    @endforelse

                    <div class="d-flex justify-content-center align-items-center">
                        {{ $groups->links() }}
                    </div>
                @else
                    <div class="text-center">
                        {{__('You are not searching for anything')}}
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>
