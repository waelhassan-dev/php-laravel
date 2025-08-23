<x:layout :title="$pageTitle">
    <h2>Comments Exploring (TESTING)</h2>
    @foreach ($comments as $comment)

        <h1 class="text-2xl">{{ $comment->author }}</h1>
        <p>{{ $comment->content }}</p>
        <a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a>


    @endforeach
</x:layout>