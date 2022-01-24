@extends("layout.app")

@section("title")

@section("content")
@if($post['is_new'])
this is a new post
@else
this is an old post
@endif
<h1>{{ $post["title"] }}</h1>

@endsection


