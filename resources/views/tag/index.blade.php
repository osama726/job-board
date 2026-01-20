@section('title', $pagetitle )
<x-layout.app :title="$pagetitle">
    <h2>this is <strong>TAGS</strong> view</h2>

    @foreach ($tags as $data)
        <p>{{ $data->title }}</p>
    @endforeach
<hr>
</x-layout.app>
