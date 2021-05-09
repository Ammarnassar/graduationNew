<div class="iq-card iq-card-block" id="card">
    <div class="iq-card-body">
        <div class="user-post-data">
            <div class="d-flex flex-wrap">
                <div class="media-support-user-img mr-3">
                    <img class="rounded-circle img-fluid" src="{{$post->user->avatar}}" alt="">
                </div>
                <div class="media-support-info mt-2">
                    <h5 class="mb-0 d-inline-block"><a href="{{route('profile' , strtolower($post->user->name))}}" class="">{{$post->user->name}}</a></h5>
                    <p class="mb-0 text-primary">{{$post->created_at->diffForHumans()}}</p>
                </div>
                <div class="iq-card-post-toolbar" style="cursor: pointer">
                    <div class="dropdown">
                      <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                      <i class="ri-more-fill"></i>
                      </span>
                        <div class="dropdown-menu m-0 p-0">
                            <a class="dropdown-item p-3" href="#">
                                <div class="d-flex align-items-top">
                                    <div class="icon font-size-20"><i class="ri-save-line"></i></div>
                                    <div class="data ml-2">
                                        <h6>Save Post</h6>
                                        <p class="mb-0">Add this to your saved items</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item p-3" href="#">
                                <div class="d-flex align-items-top">
                                    <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                    <div class="data ml-2">
                                        <h6>Hide Post</h6>
                                        <p class="mb-0">See fewer posts like this.</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item p-3" href="#">
                                <div class="d-flex align-items-top">
                                    <div class="icon font-size-20"><i class="ri-user-unfollow-line"></i></div>
                                    <div class="data ml-2">
                                        <h6>Unfollow User</h6>
                                        <p class="mb-0">Stop seeing posts but stay friends.</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item p-3" wire:click="deletePost">
                                <div class="d-flex text-danger">
                                    <div class="icon font-size-20 d-flex align-items-center">
                                        <i class="far fa-trash-alt "></i>
                                    </div>
                                    <div class="data ml-2">
                                        <h6 class="text-danger">Delete Post</h6>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3" style="unicode-bidi: plaintext;">
            <p class="p-0 mb-0 line-height">
                {!! $post->body !!}
            </p>
            <div class=" font-weight-bold flex-row align-items-center d-flex">
            @forelse($post->trends as $trend)
                <a href="#" class="mx-1 text-dark btn btn-link font-weight-bold px-0">{{$trend->name}}</a>
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
                    <iframe class="embed-responsive-item w-auto" src="{{asset('storage/'.$post->media->path)}}">
                    @endif
                </div>

            </div>
            @endif
        </div>
        <div class="comment-area mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="like-block position-relative d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="like-data">
                            @if($like)
                            <button class="btn-link btn p-0"  data-toggle="tooltip" data-placement="top" title=""  wire:click="deleteLike">
                                <i class="fas fa-thumbs-up " style="font-size: 18px"></i>

                            </button>
                            @else
                                <button class="btn-link btn p-0"  data-toggle="tooltip" data-placement="top" title=""  wire:click="newLike">

                                    <i class="far fa-thumbs-up " style="font-size: 18px ; color: black"></i>
                                </button>
                            @endif
                        </div>
                        <div class="total-like-block ml-2 mr-3">
                            <div class="dropdown">
                                    <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    @if($likeCount)
                                            {{$likeCount}}
                                    @else
                                        0
                                    @endif
                                        Likes
                                    </span>
                                <div class="dropdown-menu">
                                    @forelse($likesList as $user)
                                    <a class="dropdown-item" href="{{route('profile' , strtolower($user->name))}}">{{$user->name}}</a>
                                    @empty
                                    <a class="dropdown-item">No users</a>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="total-comment-block">
                        <div class="dropdown">
                                 <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Max Emum</a>
                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                <a class="dropdown-item" href="#">Tara Misu</a>
                                <a class="dropdown-item" href="#">Midge Itz</a>
                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                <a class="dropdown-item" href="#">Other</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="share-block d-flex align-items-center feather-icon mr-3">
                    <a href="javascript:void();"><i class="ri-share-line"></i>
                        <span class="ml-1">99 Share</span></a>
                </div>
            </div>
            <hr>
            <ul class="post-comments p-0 m-0">
                <li class="mb-2">
                    <div class="d-flex flex-wrap">
                        <div class="user-img">
                            <img src="{{asset('temp/html/images/user/02.jpg')}}" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ml-3">
                            <h6>Monty Carlo</h6>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                <a href="javascript:void();">like</a>
                                <a href="javascript:void();">reply</a>
                                <a href="javascript:void();">translate</a>
                                <span> 5 min </span>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
            <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                <input type="text" class="form-control rounded">
                <div class="comment-attagement d-flex">
                    <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                    <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                    <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>
