@extends('layouts.app')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-body chat-page p-0">
                            <div class="chat-data-block">
                                <div class="row">
                                    <div class="col-lg-3 chat-data-left scroller">
                                        <div class="chat-search pt-3 pl-3">
                                            <div class="d-flex align-items-center">
                                                <div class="chat-profile mr-3">
                                                    <img src="{{auth()->user()->avatar}}" alt="chat-user" class="avatar-60 ">
                                                </div>
                                                <div class="chat-caption">
                                                    <h5 class="mb-0">{{auth()->user()->name}}</h5>
                                                    <p class="m-0">{{__(auth()->user()->university)}}</p>
                                                </div>
                                                <button type="submit" class="close-btn-res p-3"><i class="ri-close-fill"></i></button>
                                            </div>

                                            <livewire:message.search />
                                        </div>

                                    </div>
                                    <div class="col-lg-9 chat-data p-0 chat-data-right">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="default-block" role="tabpanel">
                                                <div class="chat-start">
                                                    <span class="iq-start-icon text-primary"><i class="ri-message-3-line"></i></span>
                                                    <button id="chat-start" class="btn bg-white mt-3">
                                                        {{__('Start Conversation!')}}</button>
                                                </div>
                                            </div>
                                            @foreach($users as $user)
                                            <div class="tab-pane fade" id="test" role="tabpanel">
                                                <livewire:message.send  />
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
