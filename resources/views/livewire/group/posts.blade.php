<div>
    @forelse($posts as $post)

        <livewire:post.simple-card :post="$post" :key="$post->id">

        @empty
        <div class="my-5 text-center ">

            {{__('There is no posts to show')}}
        </div>

    @endforelse
</div>
