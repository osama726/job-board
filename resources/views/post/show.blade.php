@section('title', $pagetitle )
<x-layout.app :title="$pagetitle">
    <h2>This is your post: <strong>{{ $post->title }}</strong></h2>
</x-layout.app>
