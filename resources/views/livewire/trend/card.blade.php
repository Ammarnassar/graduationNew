<div class="iq-card">

    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title text-primary">{{__('Trends')}}</h4>
        </div>
    </div>
    <div class="iq-card-body" dir="auto">
        <ul class="media-story m-0 p-0">
            @forelse($trends as $trend)
            <li class="d-flex mb-4 align-items-center w-100 " >
                <div class="stories-data ml-3 text-dark" >
                    <a href="{{route('trend.show' , $trend->id)}}" class="p-0 btn btn-link text-dark font-weight-bold font-size-16" dir="auto">{{$trend->name}}</a>
                    <div class="mb-0 font-size-12">{{$trend->posts()->count()}} {{__('post')}}</div>
                </div>
            </li>
            @empty
                <div class="text-center">{{__('No Trends')}}</div>
            @endforelse
        </ul>
        <a href="#" class="btn btn-primary d-block mt-3">{{__('See All')}}</a>
    </div>

</div>

