@extends("layout.app")

@section('title')
@if(session("status"))
    <div style="color:red">{{ session("status") }}</div>
@endif
@section('content')
    @forelse ($posts as $postKey => $singlePost)
        @include("posts.partials.post")
    @empty
        <div>There are no posts.</div>
    @endforelse
@endsection
