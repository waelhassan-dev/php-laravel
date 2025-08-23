<x:layout :title="$pageTitle">
    <h2>Blog</h2>
    @foreach ($posts as $post)

        <h1 class="text-2xl">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>

    @endforeach
</x:layout>