<table>
    <thead>
        <tr>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hierarchies as $hierarchy)
            @include('hierarchy.row', ['hierarchy' => $hierarchy])
        @endforeach
    </tbody>
</table>
