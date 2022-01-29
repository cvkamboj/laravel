@extends("layout.app")

@section('title', "Create Posts")

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        @include("posts.partials.form")

        <input type="submit" value="Create Post">
    </form>
@endsection
