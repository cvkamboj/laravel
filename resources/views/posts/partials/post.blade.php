@if ($loop->even)
    <div style="background:gray;">{{ $postKey }}.{{ $singlePost['title'] }}</div>
@else
    <div>{{ $postKey }}.{{ $singlePost['title'] }}</div>
@endif
