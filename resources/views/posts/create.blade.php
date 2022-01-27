@extends("layout.app")

@section('title')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div><input type="text" name="title"></div>
        @error('title')
            <div style="color: red"> {{ $message }}</div>
        @enderror
        <div><textarea name="content"></textarea></div>
        @error('content')
            <div style="color: red"> {{ $message }}</div>
        @enderror
        <div style="color: red">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <input type="submit" name="Create Post">
    </form>
@endsection
