<!DOCTYPE html>
<html>
<head>
    
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
    <h2>Total Pemasukan: Rp {{ number_format($jumlahMasuk, 0, ',', '.') }}</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pembayaran</th>
                <th>Nilai</th>
                <th>Tipe</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $laporan)
                <tr>
                    <td>{{ $laporan->id }}</td>
                    <td>
                    @if ($laporan->kamar_id)
                        Sewa Kamar Nomer {{$laporan->kamar->nokamar}}
                    @else
                    {{$laporan->item}}
                    @endif    
                    </td>
                    <td>
                        @if ($laporan->tipe == 'Masuk')
                        +{{number_format($laporan->harga, 0, ',', '.')}}
                        @else
                        -{{number_format($laporan->harga, 0, ',', '.')}}
                        @endif
               
                    </td>
                    <td>{{ $laporan->tipe }}</td>
                    <td>{{$laporan->created_at->format('Y-m-d')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>