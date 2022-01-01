<div class="row">
    <div class="col-12 ">
        <div class="iq-card">
            <div class="iq-card-body p-0">
                <div class="iq-edit-list">
                    <ul class="iq-edit-profile d-flex flex-column w-100 flex-md-row nav nav-pills">
                        <li class="col-md-3 p-0">
                            <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                {{__('Personal Information')}}
                            </a>
                        </li>
                        <li class="col-md-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                {{__('Change Password')}}
                            </a>
                        </li>
                        <li class="col-md-3 p-0">
                            <a class="nav-link " data-toggle="pill" href="#account-settings">
                                {{__('Account settings')}}
                            </a>
                        </li>
                        <li class="col-md-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#app-settings">
                                {{__('App settings')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="iq-edit-list-data">
            <div class="tab-content">
                <div class="tab-pane active show" id="personal-information" role="tabpanel">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">{{__('Personal Information')}}</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form wire:submit.prevent="savePersonalInfo" id="personalInfo">
                                <div class="row align-items-center">
                                    {{-- First Name --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label for="first_name">{{__('First Name')}} :</label>
                                        <input type="text"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               id="first_name" wire:model="first_name">
                                        @error('first_name')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- Last Name --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label for="last_name">{{__('Last Name')}} :</label>

                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                               id="last_name" wire:model="last_name">
                                        @error('last_name')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- University --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label>{{__('University')}} :</label>
                                        <select class="form-control" id="exampleFormControlSelect2"
                                                wire:model="university">

                                            @foreach($universities as $uni)
                                                <option value="{{$uni}}">
                                                    {{__($uni)}}
                                                </option>
                                            @endforeach

                                        </select>

                                        @error('university')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror

                                    </div>

                                    {{-- College --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label>{{__('College')}} :</label>

                                        <select class="form-control" id="exampleFormControlSelect2"
                                                wire:model="college">
                                            @if($colleges)
                                                @foreach($colleges as $coll)
                                                    <option value="{{$coll}}">
                                                        {{__($coll)}}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>

                                        @error('college')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- Date Of Birth --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label for="dob">{{__('Date Of Birth')}}:</label>
                                        <input class="form-control" id="dob" type="date" wire:model="dob">

                                        @error('dob')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- City --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label for="cname">{{__('City')}} :</label>
                                        <select class="form-control " id="" wire:model="city">

                                            @foreach($cities as $cit)
                                                <option class="w-100" value="{{$cit}}">{{__($cit)}}</option>
                                            @endforeach
                                        </select>

                                        @error('city')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- Age --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label>{{__('Age')}}:</label>
                                        <input class="form-control" type="number" id="exampleFormControlSelect2"
                                               wire:model="age">

                                        @error('age')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- Address --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label>{{__('Address')}}:</label>
                                        <input class="form-control" id="address" wire:model="address">

                                        @error('address')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- Gender --}}
                                    <div class="form-group col-12 col-md-6">
                                        <label class="d-block">{{__('Gender')}} :</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio6" name="customRadio1"
                                                   class="custom-control-input" value="male" wire:model="gender">
                                            <label class="custom-control-label"
                                                   for="customRadio6"> {{__('Male')}} </label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio7" name="customRadio1"
                                                   class="custom-control-input" value="female" wire:model="gender">
                                            <label class="custom-control-label"
                                                   for="customRadio7"> {{__('Female')}} </label>
                                        </div>
                                        @error('gender')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <button type="submit" form="personalInfo"
                                            class="btn btn-primary mx-2">{{__('Save')}}</button>
                                    <button type="button" wire:click="resetData"
                                            class="btn iq-bg-danger mx-2">{{__('Cancel')}}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade " id="chang-pwd" role="tabpanel">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">{{__('Change Password')}}</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form wire:submit.prevent="changePassword" id="changePassword">
                                <div class=" row align-items-center">
                                    <div class="form-group col-12">

                                        <label for="current_password">{{__('Current Password')}} :</label>

                                        <a href="" class="float-right">{{__('Forgot Password')}}</a>

                                        <input type="Password"
                                               class="@error('current_password') is-invalid @enderror form-control"
                                               id="current_password" wire:model.defer="current_password">

                                        @error('current_password')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="new_password">{{__('New Password')}} :</label>
                                        <input type="Password"
                                               class="@error('password') is-invalid @enderror form-control"
                                               id="password" wire:model.defer="password">

                                        @error('password')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="password_confirmation">{{__('Verify Password')}} :</label>
                                        <input type="Password"
                                               class="@error('password_confirmation') is-invalid @enderror form-control"
                                               id="password_confirmation" wire:model.defer="password_confirmation">

                                        @error('password_confirmation')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <button type="submit" form="changePassword"
                                            class="btn btn-primary mx-2">{{__('Save')}}</button>
                                    <button wire:click="resetData"
                                            class="btn iq-bg-danger mx-2">{{__('Cancel')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade " id="account-settings" role="tabpanel">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">{{__('Account settings')}}</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">

                            <form wire:submit.prevent="saveAccountSettings" id="saveAccountSettings">

                                {{--Username --}}
                                <div class="form-group col-12">
                                    <label for="username">{{__('Username')}} :</label>
                                    <input type="text" class="form-control" id="username" wire:model="username">
                                    @error('username')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                {{--Email --}}
                                <div class="form-group col-12">
                                    <label for="email">{{__('Email')}} :</label>
                                    <input type="text" class="form-control" id="email" wire:model="email">

                                    @error('email')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                            </form>
                            {{-- Delete Account --}}
                            <div class="form-group col-12 mt-2">
                                <button class="btn btn-danger" form="deleteAccount"
                                        type="submit">{{__('Delete Account')}}</button>
                            </div>
                            <form wire:submit.prevent="deleteAccount" id="deleteAccount"></form>

                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <button type="submit" form="saveAccountSettings"
                                        class="btn btn-primary mx-2">{{__('Save')}}</button>
                                <button wire:click="resetData" class="btn iq-bg-danger mx-2">{{__('Cancel')}}</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="app-settings" role="tabpanel" wire:ignore.self>
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">{{__('App settings')}}</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form wire:submit.prevent="changeLanguage" id="language">
                                <div class=" row align-items-center">
                                    <div class="form-group col-12 col-md-6">
                                        <label class="d-block">{{__('Language')}} :</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio8" name="customRadio1"
                                                   class="custom-control-input" value="ar" checked=""
                                                   wire:model.defer="lang">
                                            <label class="custom-control-label"
                                                   for="customRadio8"> {{__('Arabic')}} </label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio9" name="customRadio1"
                                                   class="custom-control-input" value="en" wire:model.defer="lang">
                                            <label class="custom-control-label"
                                                   for="customRadio9"> {{__('English')}} </label>
                                        </div>
                                        @error('lang')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <button type="submit" form="language"
                                            class="btn btn-primary mx-2">{{__('Save')}}</button>
                                    <button type="reset" class="btn iq-bg-danger mx-2">{{__('Cancel')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
