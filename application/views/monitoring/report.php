<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Monitoring</title>
    <style>
        body {
            font-size: .8em;
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            text-align: center;
        }

        table td {
            border: 1px solid #ddd;
            padding: 7px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
            padding: 5px;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            text-transform: capitalize;
            color: #333;
        }
    </style>
</head>

<body>
    <h2>Laporan Monitoring</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Pencaker</th>
                <th>Tanggal</th>
                <th>Status Bekerja</th>
                <th>Tempat Bekerja</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data_result)): ?>
                <?php $no = 1;
                foreach ($data_result as $item): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $item->nama ?></td>
                        <td><?= $item->nopencaker ?></td>
                        <td><?= $item->tanggal ?></td>
                        <td><?= $item->status_bekerja ?></td>
                        <td><?= $item->tempat_bekerja ?? '-' ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" style="text-align: center;">Tidak ada data tersedia.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>