<div>
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Create Post</h4>
        </div>
    </div>
    <div class="iq-card-body" data-toggle="modal" >
        <form class="post-text" wire:submit.prevent="save">
            <div class="d-flex align-items-center">
                <div class="user-img">
                    <img src="{{auth()->user()->avatar}}" alt="userimg" class="avatar-60 rounded-circle">
                </div>
                <div class="d-flex w-100 flex-column ">
                    <textarea type="text" contenteditable="true" class=" form-control rounded position-relative" placeholder="Write something here..." style="unicode-bidi: plaintext; border:none; line-height: normal; resize: none" rows="5" maxlength="255"  wire:model="body" required>
                    </textarea>

                @if($media)
                        @if (in_array($media->extension() , ['jpg' , 'jpeg' , 'png' , 'gif']))
                            <div class="position-relative ml-4" style="cursor: pointer">
                                <img class="img-fluid rounded  "  src=" {{$media->temporaryUrl()}} ">
                                <div class="position-absolute " style="top: -4px ; right: -8px">
                                    <a wire:click="deleteMedia" class="bg-secondary text-white rounded-circle p-2 d-flex align-items-center justify-content-center">
                                        <i class="fas fa-times" style="font-size: 13px"></i>
                                    </a>
                                </div>
                            </div>
                        @elseif(in_array($media->extension() , ['mp4' , 'ogg' , 'mpeg' , 'mov' , 'flv' , 'mkv' , 'avi']))
                            <iframe class="embed-responsive-item" src="{{$media->temporaryUrl()}}"></iframe>
                        @endif
                    @endif
                </div>

                <div class="position-absolute " style="bottom: 80px ; right: 40px">{{ $postLength}} / 255</div>
            </div>
            <hr>
            <div class="d-flex flex-row justify-content-between ">
                <ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">

                    <label for="media" style="cursor: pointer"><li class="iq-bg-primary rounded p-2 pointer mr-3"><img src="{{asset('temp/html/images/small/07.png')}}" alt="icon" class="img-fluid"> Photo/Video</li></label>

                    <input type="file" id="media" class="d-none" wire:model="media">

                    <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="{{asset('temp/html/images/small/08.png')}}" alt="icon" class="img-fluid"> Tag Friend</li>
                </ul>
                <button type="submit" class="btn btn-primary w-25" id="post-button">

                    Post

                </button>
            </div>
        </form>
    </div>
</div>
