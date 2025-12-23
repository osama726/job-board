@section('title', $pagetitle)
<x-layout.app :title="$pagetitle">
    <h2 style="font-size: larger">{{ $comment->content }}</h2>
    <p>This comment for <strong>{{ $comment->author }}</strong>
        and belongs to
        <a href="{{ route('post.show', $comment->Posts->id) }}" >
            <strong>{{ $comment->Posts->title }}</strong>
        </a>
    </p>
</x-layout.app>
