@extends('layouts.main')
@section('content')
    <h1>Data Produk</h1>
{{--  --}}
{{--  --}}
    <div class="table-responsive">
        <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Barang</th>
                <th scope="col" class="text-center">Gambar</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($nama as $n)
            <tr class="">
                <td scope="row">{{ $loop->iteration}}.</td>
                <td>{{ $n }}</td>
                <td>--</td>
            </tr>

            @empty
            <tr>
              <td class="text-center" colspan="3">Data Tidak Ada</td>
            </tr>

            @endforelse
        </tbody>
    </table>
 </div>

 <p>
    Keterangan : <br>
    <p class="fst-italic">
      @if (count($nama) == 1)
          Saya Memiliki 1 Produk
      @elseif (count($nama) > 1)
          Saya Memiliki banyak Produk
      @else
          Saya Tidak Memiliki Produk
      @endif
    </p>
    <p>
        Nama Produk :

    </p>
@endsection
{{-- gaje --}}


