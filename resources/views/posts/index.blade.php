@extends("layout.app")

@section('title')

@section('content')
    @forelse ($posts as $postKey => $singlePost)
        @include("posts.partials.post")
    @empty
        <div>There are no posts.</div>
    @endforelse
@endsection
