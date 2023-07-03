<tr>
    <td>{{ $hierarchy->nama }}</td>
</tr>
@if ($hierarchy->children)
    @foreach ($hierarchy->children as $child)
        @include('hierarchy.row', ['hierarchy' => $child])
    @endforeach
@endif
