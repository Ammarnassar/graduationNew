<div>
    @forelse($posts as $post)

        <livewire:post.card :post="$post" :key="$post->id">

        @empty
        <div class="mt-2 text-center">
            There is no posts to show
        </div>
    @endforelse
</div>
