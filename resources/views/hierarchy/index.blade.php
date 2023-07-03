<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
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
    <div id="hierarchy-table"></div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    // Data contoh untuk tabel expandable
    const data = [{
            id: 1,
            nama: 'Baris 1',
            parent: null
        },
        {
            id: 2,
            nama: 'Baris 1.1',
            parent: 1
        },
        {
            id: 3,
            nama: 'Baris 1.2',
            parent: 1
        },
        {
            id: 4,
            nama: 'Baris 2',
            parent: null
        },
        {
            id: 5,
            nama: 'Baris 2.1',
            parent: 4
        },
        {
            id: 6,
            nama: 'Baris 2.1.1',
            parent: 5
        },
        {
            id: 7,
            nama: 'Baris 2.2',
            parent: 4
        },
    ];

    // Fungsi untuk menghasilkan hierarki
    function generateHierarchy(data, parent = null) {
        const result = [];

        for (let i = 0; i < data.length; i++) {
            if (data[i].parent === parent) {
                const children = generateHierarchy(data, data[i].id);

                if (children.length) {
                    data[i].children = children;
                }

                result.push(data[i]);
            }
        }

        return result;
    }

    // Memanggil fungsi generateHierarchy
    const hierarchy = generateHierarchy(data, null);

    // Fungsi untuk menampilkan tabel expandable
    function renderTable(data, level = 0) {
        for (let i = 0; i < data.length; i++) {
            const indentation = '  '.repeat(level);
            console.log(`${indentation}- ${data[i].nama}`);

            if (data[i].children) {
                renderTable(data[i].children, level + 1);
            }
        }
    }

    // Memanggil fungsi renderTable
    renderTable(hierarchy);

    // $view_hierarchy = renderTable(hierarchy);
    // console.log(renderTable(hierarchy));
    // $('#hierarchy-table').html(renderTable(hierarchy));
</script>
