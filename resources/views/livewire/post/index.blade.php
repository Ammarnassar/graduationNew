<div>
    @forelse($posts as $post)

        <livewire:post.simple-card :post="$post" :key="$post->id">

        @empty
        <div class="mt-2 text-center">
            {{__('There is no posts to show')}}
        </div>
    @endforelse
</div>
