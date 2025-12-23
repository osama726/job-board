@section('title', $pagetitle )
<x-layout.app :title="$pagetitle">
    <h2>this is <strong>POSTS</strong> view</h2>

    @foreach ($posts as $data)
        <p>{{ $data->title }}</p>

        @foreach ( $data->comments as $comment )
            {{ $comment->content }}
        @endforeach
    @endforeach
<hr>
<hr>
<hr>
        {{-- {{ $posts[0]->comments[0]->content }} --}}
</x-layout.app>
