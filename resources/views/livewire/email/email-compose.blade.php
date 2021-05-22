<div>
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-12 col-md-12">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="iq-card iq-border-radius-20">
                                <div class="iq-card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h5 class="text-primary card-title"><i class="ri-pencil-fill"></i> {{__('Compose Message')}}</h5>
                                        </div>
                                    </div>
                                    <form class="email-form" wire:submit.prevent="send" enctype="multipart/form-data">
                                        <div class="form-group d-flex flex-column flex-md-row">

                                            <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('To')}}:</label>
                                            <div class="col-sm-10 d-flex flex-column">
                                                <input wire:model.defer="receiver"  type="email" id="inputEmail3" class="form-control  @error('receiver') is-invalid @enderror"  >
                                                @error('receiver')
                                                <div class="text-danger p-2">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="form-group d-flex flex-column flex-md-row">
                                            <label for="subject" class="col-sm-2 col-form-label">{{__('Subject')}}:</label>
                                            <div class="col-sm-10">
                                                <input wire:model.defer="subject" type="text" id="subject" class="form-control  @error('subject') is-invalid @enderror"  >
                                                @error('subject')
                                                <div class="text-danger p-2">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group d-flex flex-column flex-md-row">
                                            <label for="subject" class="col-sm-2 col-form-label">{{__('Your Message')}}:</label>
                                            <div class="col-md-10">
                                                <textarea wire:model.defer="body" class="textarea form-control  @error('body') is-invalid @enderror" rows="5">

                                                </textarea>

                                                @error('body')
                                                <div class="text-danger p-2">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group d-flex flex-column flex-md-row align-items-center">
                                            <div class="d-flex flex-grow-1 align-items-center">
                                                <div class="send-btn pl-3">
                                                    <button type="submit" class="btn btn-primary">{{__('Send')}}</button>
                                                </div>

                                                <div class="send-panel">
                                                    <label class="ml-2 mb-0 iq-bg-primary rounded" for="file"> <input type="file" id="file" style="display: none" wire:model.defer="files" multiple> <a><i class="ri-attachment-line"></i> </a> </label>
                                                </div>
                                            </div>
                                            @error('files')
                                            <div class="text-danger p-2">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div wire:target="files" wire:loading  class="font-weight-bold text-primary">
                                            {{__('Uploading...')}}
                                        </div>
                                        @if($files)

                                            @foreach($files as $file)
                                            <div class="bg-secondary mb-2 d-flex justify-content-between align-items-center px-3 py-2" role="alert">
                                                <div>
                                                    {{$file->getClientOriginalName()}}
                                                </div>
                                                <div wire:key="{{$loop->index}}">
                                                    <a  class="btn btn-link p-0" wire:click="deleteFiles({{$loop->index}})">
                                                        <i class="bi bi-x-lg"></i>
                                                    </a>
                                                </div>

                                            </div>
                                            @endforeach
                                        @endif
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
