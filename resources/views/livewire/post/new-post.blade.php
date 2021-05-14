<div>
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title text-primary">{{__('Create Post')}}</h4>
        </div>
    </div>
    <div class="iq-card-body" data-toggle="modal" >
        <form class="post-text" wire:submit.prevent="save">
            <div class="d-flex align-items-start align-items-lg-center align-items-md-center flex-column flex-lg-row flex-md-row ">
                <div class="user-img mx-2">
                    <img src="{{auth()->user()->avatar}}" alt="userimg" class="avatar-60 rounded-circle">
                </div>
                <div class="d-flex flex-column w-100">
                    <div class="d-flex w-100 flex-column ">
                    <textarea type="text" contenteditable="true"
                              class="border-left form-control rounded position-relative"
                              placeholder="{{__('What are you thinking ?')}}" style="unicode-bidi: plaintext; border:none; line-height: normal; resize: none" rows="5"
                              maxlength="255"
                              wire:model="body">
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
                                <div class="bg-secondary mb-2 d-flex justify-content-between align-items-center px-3 py-2" role="alert">
                                     <div>
                                         {{$media->getClientOriginalName()}}
                                     </div>
                                    <a  class="btn btn-link p-0" wire:click="deleteMedia">
                                        <i class="bi bi-x-lg"></i>
                                    </a>
                                </div>
                            @endif
                        @endif

                        @error('media')
                        <div class="text-danger text-center">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="align-self-end " style="bottom: 80px ; right: 40px">{{ $postLength}} / 255</div>
                </div>

            </div>
            <hr>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">

                    <label for="media" class="m-0" style="cursor: pointer">
                        <li class="iq-bg-primary rounded  pointer p-2 d-flex align-items-center">
                            <i class="bi bi-images" style="font-size: 20px"></i>
                            <span class="mx-2">{{__('Photo/Video')}}</span>
                        </li>
                    </label>

                </ul>

                <button type="submit" class="btn  bg-primary text-white w-25 h-25 " @if(!$body && !$media) disabled @endif>

                    {{__('Publish')}}

                </button>
            </div>

                <div
                    x-data="{ isUploading: false, progress: 0 }"
                    x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false"
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                    class="position-relative">
                    <input type="file" id="media" class="d-none" wire:model="media">
                    <div wire:loading wire:target="media" class="position-absolute font-size-12 px-2">
                        {{__('Uploading...')}}
                    </div>
                    <div class="progress rounded " style="height: 1.5rem; opacity: 70%" x-show="isUploading">
                        <div class="progress-bar progress-bar-striped bg-primary" x-bind:style="`width: ${progress}%`" role="progressbar"  aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                </div>

        </form>
    </div>
</div>
