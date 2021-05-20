<div>
    <form class="comment-text d-flex align-items-center mt-3 p-0 rounded-lg"  wire:submit.prevent="save">
        <input type="text" class="form-control  pt-0 pb-0 rounded-lg" required @if($post->comments->count()) placeholder="{{__('Write a comment')}}" @else placeholder="{{__('Be the first comment')}}" @endif wire:model="body">
        <div class="comment-attagement d-flex pt-0 pb-0 h-100">
            <button type="submit" class="btn  btn-primary ">{{__('Publish')}}</button>
{{--            <a href="javascript:void();"><i class="ri-link mr-3"></i></a>--}}
{{--            <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>--}}
{{--            <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>--}}
        </div>

    </form>
</div>

