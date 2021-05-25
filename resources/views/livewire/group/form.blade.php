<div class="iq-card-body">
    <form wire:submit.prevent="store">

        <div class=" row align-items-center">
            <div class="form-group col-sm-6">
                <label for="fname">{{__('Group Name')}}:</label>
                <input wire:model.defer="group_name" type="text"
                    class="form-control @error('group_name') is-invalid @enderror" id="gname" value="">
                @error('group_name')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label>{{__('University')}} :</label>
                <select class="form-control" id="exampleFormControlSelect2" wire:model="university_name">

                    @foreach($universities as $uni)
                        <option value="{{$uni}}" >
                            {{__($uni)}}
                        </option>
                    @endforeach

                </select>

                @error('university_name')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror

            </div>


            <div class="form-group col-12 col-md-6">
                <label>{{__('College')}} :</label>

                <select class="form-control" id="exampleFormControlSelect2" wire:model="colleague">
                    <option value="" selected >
                        {{__('Select College')}}
                    </option>
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

            <div class="form-group col-sm-6">
                <label>{{__('City')}}:</label>
                <select class="form-control " id="" wire:model="city">

                    @foreach($cities as $cit)
                        <option class="w-100" value="{{$cit}}">{{__($cit)}}</option>
                    @endforeach
                </select>

                @error('city')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-sm-12">
                <label>{{__('Description')}}:</label>
                <textarea wire:model.defer="description" class="form-control @error('description') is-invalid @enderror"
                    name="address" rows="5" style="line-height: 22px;">

         </textarea>

                @error('description')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2">{{__('Submit')}}</button>
        <button type="reset" class="btn iq-bg-danger">{{__('Cancle')}}</button>
    </form>
</div>
