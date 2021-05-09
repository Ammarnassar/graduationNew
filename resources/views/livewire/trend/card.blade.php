<div class="iq-card">
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Trends</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <ul class="media-story m-0 p-0">
            @forelse($trends as $trend)
            <li class="d-flex mb-4 align-items-center">
                <div class="stories-data ml-3">
                    <h5 class="font-weight-bold" >{{$trend->name}}</h5>
                    <p class="mb-0">{{$trend->posts_count}} post</p>
                </div>
            </li>
            @empty
                <div class="text-center">No Trends</div>
            @endforelse
        </ul>
        <a href="#" class="btn btn-primary d-block mt-3">See All</a>
    </div>
</div>

