@extends('layouts.template')
@section('title','Laporan')
@section('subjudul','Laporan')
@section('content')

    <div class="container">
        <a class="btn btn-sm btn-primary" href="{{url('laporan/cetakPetugas')}}">Cetak Data Petugas</a>
        <a class="btn btn-sm btn-primary" href="{{url('laporan/cetakSpp')}}">Cetak Data Spp</a>
        <a class="btn btn-sm btn-primary" href="{{url('laporan/cetakKelas')}}">Cetak Data Kelas</a>
        <a class="btn btn-sm btn-primary" href="{{url('laporan/cetakSiswa')}}">Cetak Data Siswa</a>
        <a class="btn btn-sm btn-primary" href="{{url('laporan/cetakPembayaran')}}">Cetak Data Pembayaran</a>
        <a class="btn btn-sm btn-primary" href="{{url('laporan/cetakHistori')}}">Cetak Data Histori</a>
    </div>

@endsection