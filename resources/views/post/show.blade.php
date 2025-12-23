@section('title', $pagetitle )
<x-layout.app :title="$pagetitle">
    <h2>This is your post: <strong>{{ $post->content }}</strong></h2>

    <ul>
        @foreach ( $post->comments as $comment )
            <li>
                {{ $comment->content }},
                {{ $comment->author }}
            </li>
            <hr>
        @endforeach
    </ul>
</x-layout.app>
