@extends('layouts.app')
@section('title','CetakHistori')
@section('sub-judul','CetakHistori')
@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nisn</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Bayar</th>
                <th>Tahun Bayar</th>
                <th>Jumlah Bayar</th>
                <th>Petugas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayaran as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nisn}}</td>
                <td>{{date(('d'),strtotime($item->tanggal_bayar))}}</td>
                <td>{{date(('M'),strtotime($item->tanggal_bayar))}}</td>
                <td>{{date(('Y'),strtotime($item->tanggal_bayar))}}</td>
                <td>{{$item->jumlah_bayar}}</td>
                <td>{{$item->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{url('laporan')}}" class="btn btn-primary btn-sm ">Kembali</a>
</div>


@endsection
@section('addon')
<!-- Cetak Histori Using Javascript Code -->
<script type="text/javascript">
    window.print();
</script>
@endsection