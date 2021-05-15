<div>
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="iq-card iq-border-radius-20">
                                <div class="iq-card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h5 class="text-primary card-title"><i class="ri-pencil-fill"></i> Compose Message</h5>
                                        </div>
                                    </div>
                                    <form class="email-form" wire:submit.prevent="send">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">To:</label>
                                            <div class="col-sm-10">
                                                <input wire:model.defer="receiver"  type="email" id="inputEmail3" class="form-control"  >
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="subject" class="col-sm-2 col-form-label">Subject:</label>
                                            <div class="col-sm-10">
                                                <input wire:model.defer="subject" type="text" id="subject" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="subject" class="col-sm-2 col-form-label">Your Message:</label>
                                            <div class="col-md-10">
                                                <textarea wire:model.defer="body" class="textarea form-control" rows="5">Next, use our Get Started docs to setup Tiny!</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <div class="d-flex flex-grow-1 align-items-center">
                                                <div class="send-btn pl-3">
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                </div>
                                                <div class="send-panel">
                                                    <label class="ml-2 mb-0 iq-bg-primary rounded" for="file"> <input type="file" id="file" style="display: none" wire:model.defer="files" multiple> <a><i class="ri-attachment-line"></i> </a> </label>
                                                    <label class="ml-2 mb-0 iq-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-map-pin-user-line text-primary"></i></a>  </label>
                                                    <label class="ml-2 mb-0 iq-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-drive-line text-primary"></i></a>  </label>
                                                    <label class="ml-2 mb-0 iq-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-camera-line text-primary"></i></a>  </label>
                                                    <label class="ml-2 mb-0 iq-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-user-smile-line text-primary"></i></a>  </label>
                                                </div>
                                            </div>
                                            <div class="d-flex mr-3 align-items-center">
                                                <div class="send-panel float-right">
                                                    <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="javascript:void();"><i class="ri-settings-2-line text-primary"></i></a></label>
                                                    <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="javascript:void();">  <i class="ri-delete-bin-line text-primary"></i></a>  </label>
                                                </div>
                                            </div>
                                        </div>
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
