@extends("layout.app")

@section('title')

@if(session("status"))
    <div style="color:green">{{ session("status") }}</div>
@endif

@section('content')
    @if ($post['is_new'])
        this is a new post
    @else
        this is an old post
    @endif
    <h1>{{ $post['title'] }}</h1>
    <div>{{ $post['content'] }}</div>
@endsection
