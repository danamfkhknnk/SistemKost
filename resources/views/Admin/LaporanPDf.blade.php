<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembayaran Tentrem Mulyo {{ \Carbon\Carbon::parse($bulanTahun)->format('F Y') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan Pembayaran</h1>
    <h2>Total Pemasukan: Rp {{ number_format($jmlselesai, 0, ',', '.') }}</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kamar</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Keperluan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembayaran as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->kamar->nokamar }}</td> <!-- Ganti dengan relasi jika ada -->
                    <td>Rp {{ number_format($item->kamar->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->status }}</td>
                    <td>Pembayaran {{$item->tipe}}</td>
                    <td>{{ $item->updated_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>