@if ($loop->even)
    <div style="background:gray;">{{ $postKey }}.{{ $singlePost['title'] }}</div>
@else
    <div>{{ $postKey }}.{{ $singlePost['title'] }}</div>
@endif

<form action="{{ route("posts.destroy", $singlePost['id']) }}" method="POST">
    @csrf
    @method("delete")
    <input type="submit" value="Delete">
</form>
