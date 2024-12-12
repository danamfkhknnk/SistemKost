@extends('Component.LayoutPublik')

@section('content')
<div class="container mx-auto p-4 flex justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold mb-4 text-blue-500">Konfirmasi Pemesanan</h1>
        
        <div class="grid lg:grid-cols-2 gap-2 justify-items-center">
            @foreach (explode(',', $pembayaran->kamar->gambarkamar) as $image)
              <img src="{{ asset('gambarkamar/' . $image) }}" alt="Gambar kamar" class="rounded-md shadow-md" width="300px">
            @endforeach
          </div>
        
        <div class="mt-4">
            <p class="text-lg mb-2"><strong>Nama Kamar:</strong> {{ $pembayaran->kamar->nokamar }}</p>
            <p class="text-lg mb-2"><strong>Harga Kamar:</strong> {{ $pembayaran->kamar->harga }}</p>
            <p class="text-lg mb-2"><strong>Tipe Kamar:</strong> {{ $pembayaran->kamar->tipe }}</p>
            <p class="text-lg mb-2"><strong>Status Pembayaran:</strong> {{ $pembayaran->status }}</p>
            <p class="text-lg mb-2"><strong>Tanggal Pembayaran:</strong> {{ $pembayaran->created_at }}</p>
        </div>
        <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded mt-3 hover:bg-blue-700" id="pay-button">
          Bayar Sekarang
        </button>
    </div>
</div>
<form id="pay-form" method="POST" action="{{ route('berhasil', $pembayaran['id']) }}">
    @csrf
    @method('POST')
</form>
@endsection

@section('script')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
      // SnapToken acquired from previous step
      snap.pay('{{$pembayaran['snap_token'] }}', {
        // Optional
        onSuccess: function(result){
            var form = document.getElementById('pay-form');
            form.submit();
        },
        // Optional
        onPending: function(result){
          /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onError: function(result){
          /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
      });
    };
</script>
@endsection