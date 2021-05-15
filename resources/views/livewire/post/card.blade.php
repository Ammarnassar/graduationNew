
<div class="iq-card iq-card-block " id="card">
    <a href="{{route('home')}}" class="">
    <div class="iq-card-body post-card p-3 "  style="cursor: pointer">
        <a href="{{route('home')}}">
            <div class="user-post-data">
                <div class="d-flex flex-wrap">
                    <div class="media-support-user-img mr-3">
                        <img class="rounded-circle img-fluid" src="{{$post->user->avatar}}" alt="">
                    </div>
                    <div class="media-support-info mt-2">
                        <a href="{{route('user.profile' , $post->user->id)}}" class="btn btn-link p-0 text-dark d-inline-block font-size-20" >{{$post->user->name}}</a>
                        <p class="mb-0 text-primary">{{$post->created_at->diffForHumans()}}</p>
                    </div>
                    @if($post->user->id == auth()->id())
                        <div class="iq-card-post-toolbar" style="cursor: pointer">
                            <div class="dropdown">
                      <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                      <i class="las la-ellipsis-v"></i>
                      </span>
                            <div class="dropdown-menu " style="width: fit-content" >
                                <a class="dropdown-item p-3 " href="#">
                                    <div class="d-flex align-items-center ">
                                        <div class="icon font-size-20">
                                            <i class="lar la-save"></i>
                                        </div>
                                        <div class="data ml-2 ">
                                            <h6>{{__('Save Post')}}</h6>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="icon font-size-20"><i class="las la-eye-slash"></i></div>
                                        <div class="data ml-2">
                                            <h6>{{__('Hide Post')}}</h6>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="icon font-size-20"><i class="las la-user-times"></i></i></div>
                                        <div class="data ml-2">
                                            <h6>{{__('Unfollow')}} {{$post->user->name}}</h6>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item p-3" wire:click="deletePost">
                                    <div class="d-flex ">
                                        <div class="icon font-size-20 d-flex align-items-center">
                                            <i class="far fa-trash-alt text-danger"></i>
                                        </div>
                                        <div class="data ml-2">
                                            <h6 class="text-danger">{{__('Delete Post')}}</h6>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="mt-3" dir="auto">
                <p class="p-0 mb-0 line-height w-100 text-justify" >
                    {!! $post->body !!}
                </p>
                <div class=" font-weight-bold flex-row align-items-center d-flex">

                    @forelse($post->trends as $trend)
                        <a href="{{route('trend.show' , $trend->id)}}" class="mx-1 text-dark btn btn-link font-weight-bold px-0">{{$trend->name}}</a>
                    @empty

                    @endforelse

                </div>
            </div>
            <div class="user-post mt-2">
                @if($post->media)
                    <div class="d-flex">

                        <div class="col-md-12 p-0">
                            @if(in_array($post->media->extension , ['jpg' , 'jpeg' , 'png' , 'gif']))
                                <img src="{{asset('storage/'.$post->media->path)}}" alt="post-image" class="img-fluid rounded w-100" >
                            @elseif(in_array($post->media->extension , ['mp4' , 'ogg' , 'mpeg' , 'mov' , 'flv' , 'mkv' , 'avi']))
                                <video class="w-100 embed-responsive-item" controls>
                                    <source src="{{asset('storage/'.$post->media->path)}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </div>

                    </div>
                @endif
            </div>
            <div class="comment-area mt-3">
                <div class="d-flex justify-content-between align-items-center" style="width: max-content">
                    <div class="like-block position-relative d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="like-data d-flex align-items-center">
                                @if($like)
                                    <a class="btn-link btn p-0"  data-toggle="tooltip" data-placement="top" title="" wire:click="deleteLike">
                                        <i class="bi bi-heart-fill text-primary" style="font-size: 18px"></i>
                                    </a>

                                @else
                                    <a class="btn-link btn p-0"  data-toggle="tooltip" data-placement="top" title=""  wire:click="newLike">

                                        <i class="bi bi-heart " style="font-size: 18px ; color: grey"></i>
                                    </a>
                                @endif
                            </div>
                            <div class="total-like-block ml-2 mr-3">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                         {{$likeCount}}  {{__('Likes')}}
                                    </span>
                                    <div class="dropdown-menu" style="">
                                        @forelse($likesList as $user)
                                            <a class="dropdown-item" href="{{route('user.profile' , $user->id)}}">{{$user->name}}</a>
                                        @empty
                                            <a class="dropdown-item">{{__('No users')}}</a>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="total-comment-block">
                            <div class="dropdown d-flex align-items-center">

                                <a class="btn-link btn px-2"  data-toggle="tooltip" data-placement="top" title="" >
                                    <i class="bi bi-chat-square" style="font-size: 18px"></i>
                                </a>
                                <span  data-toggle="dropdown" >
                             {{$commentsCount}} {{__('Comments')}}
                             </span>
                            </div>
                        </div>
                    </div>
                    <div class="share-block d-flex align-items-center feather-icon mx-3">
                        <a href="">
                            <i class="las la-share " style="font-size: 18px"></i>
                            <span class="ml-1">99 {{__('Share')}}</span>
                        </a>
                    </div>
                </div>
                <hr>
                <livewire:comment.index-comment :post="$post"/>
                <livewire:comment.new-comment :post="$post"/>
            </div>
        </a>
    </div>
    </a>
</div>

