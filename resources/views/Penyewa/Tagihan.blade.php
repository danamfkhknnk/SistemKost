@extends('Component.LayoutPenyewa')

@section('content')
    
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Tagihan Sewa Kamar</h2> 
  </div>
  <div class="flex gap-4">
    <div class="pt-2">
        @if (Session::has('message'))
        <div class="flex items-center  p-2 mb-2 text-sm text-blue-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" >
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <p class="alert" {{Session::get('alert-class', 'alert-info')}}>{{Session::get('message')}}</p>
        </div>
        @endif
    </div>
    
  </div>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Id Tagihan
              </th>
              <th scope="col" class="px-6 py-3">
                  No Kamar
              </th>
              <th scope="col" class="px-6 py-3">
                  Jumlah
              </th>
              <th scope="col" class="px-6 py-3">
                 Jatuh Tempo
              </th>
              <th scope="col" class="px-6 py-3">
                  Action
              </th>
          </tr>
      </thead>
      <tbody>
        @foreach ($pembayaran as $pembayaran)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 {{$pembayaran->id}}
              </th>
              <td class="px-6 py-4">
                  {{$pembayaran->kamar->nokamar}}
              </td>
              <td class="px-6 py-4">
                 {{number_format($pembayaran->kamar->harga, 0, ',', '.')}}
              </td>
              <td class="px-6 py-4">
                  {{$pembayaran->jatuhtempo ?? 'Pembayaran Pertama'}}
              </td>
              <td class="flex px-6 py-4">
                @if ($pembayaran->status == 'pending')
                <button type="button" class="bg-primary text-white px-1 py-2 rounded hover:bg-blue-700" id="pay-button">
                  Bayar 
                </button>
                @else
                <div class="flex">
                  <a href="{{ url('/penyewa/tagihan/'.$pembayaran->id) }}" class="bg-blue-500 text-dark px-1 py-1 rounded hover:bg-blue-700"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4"/>
                  </svg>
                  </a>
                </div>
                

                
                @endif
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>

<form id="pay-form" method="POST" action="{{ route('bayarTagihan', $pembayaran['id']) }}">
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