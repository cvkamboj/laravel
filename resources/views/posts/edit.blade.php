@extends("layout.app")

@section('title', "Update post")

@section('content')
    <form action="{{ route('posts.update', ['post'=> $post->id]) }}" method="POST">
        @csrf

        @method("PUT")

        @include("posts.partials.form")

        <input type="submit" value="Update Post">
    </form>
@endsection
