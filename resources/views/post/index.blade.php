@section('title', $pagetitle )
<x-layout.app :title="$pagetitle">
    <h2>this is <strong>POSTS</strong> view</h2>
    @foreach ($posts as $data)
        <p>{{ $data->title }}</p>

    @endforeach
</x-layout.app>
