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
            <div class="form-group col-sm-6">
                <label for="lname">{{__('University Name')}}:</label>
                <input wire:model.defer="university_name" type="text"
                    class="form-control @error('university_name') is-invalid @enderror" id="uname" value="">
                @error('university_name')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-sm-6">
                <label for="uname">{{__('colleague')}}:</label>
                <input wire:model.defer="colleague" type="text"
                    class="form-control @error('colleague') is-invalid @enderror" id="cname" value="">
                @error('colleague')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-sm-6">
                <label>{{__('Country')}}:</label>
                <select wire:model.defer="country" class="form-control @error('country') is-invalid @enderror"
                    id="exampleFormControlSelect3">
                    <option value="Caneda">Caneda</option>
                    <option>Noida</option>
                    <option value="Jordan" selected="">Jordan</option>
                    <option>India</option>
                    <option>Africa</option>
                </select>
                @error('country')
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
