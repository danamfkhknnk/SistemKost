<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kwitansi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f9f9f9;
    }

    .kwitansi-container {
      max-width: 600px;
      margin: 0 auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .kwitansi-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .kwitansi-header h1 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
    }

    .kwitansi-header p {
      margin: 0;
      font-size: 14px;
      color: #555;
    }

    .kwitansi-details {
      margin-bottom: 20px;
      font-size: 14px;
      color: #333;
    }

    .kwitansi-details p {
      margin: 5px 0;
    }

    .amount-box {
      text-align: center;
      margin: 20px 0;
      padding: 10px;
      border: 2px dashed #555;
      font-size: 18px;
      font-weight: bold;
      background-color: #f4f4f4;
    }

    .signature {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }

    .signature div {
      text-align: center;
    }

    .signature .line {
      margin-top: 40px;
      border-top: 1px solid #333;
      width: 150px;
      margin-left: auto;
      margin-right: auto;
    }

    .kwitansi-footer {
      text-align: center;
      margin-top: 20px;
      font-size: 12px;
      color: #777;
    }
  </style>
</head>
<body>

<div class="kwitansi-container">
  <!-- Header -->
  <div class="kwitansi-header">
    <h1>Kwitansi Pembayaran Tentrem Mulyo</h1>
    <p>ID. Transaksi: {{$pembayaran->id}}</p>
    <p>Tanggal: {{$pembayaran->updated_at->format('d-m-Y H:i')}}</p>
  </div>

  <!-- Details -->
  <div class="kwitansi-details">
    <p><strong>Telah diterima dari:</strong>Pengelola Kost Tentrem Mulyo</p>
    <p><strong>Sejumlah:</strong> Rp {{$pembayaran->kamar->harga}}</p>
    <p><strong>Untuk pembayaran:</strong> Sewa kost kamar {{$pembayaran->kamar->nokamar}} Tipe {{$pembayaran->kamar->tipe}}</p>
  </div>

  <!-- Amount Box -->
  <div class="amount-box">
    Rp {{$pembayaran->kamar->harga}}
  </div>

  <!-- Signature -->
  <div class="signature">
    <div>
      <p>Penerima</p>
      <div class="line"></div>
    </div>
    <div>
      <p>Pemberi</p>
      <div class="line"></div>
    </div>
  </div>

  <!-- Footer -->
  <div class="kwitansi-footer">
    <p>Dokumen ini sah tanpa tanda tangan basah.</p>
  </div>
</div>

</body>
</html>
