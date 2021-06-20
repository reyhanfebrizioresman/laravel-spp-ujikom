@extends('layouts.template')
@section('title','Histori')
@section('subjudul','Histori')
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
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
        <tbody>
    @if(count($pembayaran) > 0)
        @if(Auth::user()->name)
            @foreach($pembayaran as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nisn}}</td>
                <td>{{date(('d'),strtotime($item->tanggal_bayar))}}</td>
                <td>{{date(('M'),strtotime($item->tanggal_bayar))}}</td>
                <td>{{date(('Y'),strtotime($item->tanggal_bayar))}}</td>
                <td>{{$item->jumlah_bayar}}</td>
                <td>{{$item->name}}</td>
                <!-- @if(Auth::check() && Auth::user()->level == 'admin')
                <td>
                    <a href="{{route('pembayaran.edit',$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{route('pembayaran.destroy',$item->id)}}" method="POST" class="d-inline-block">
                        @method('delete')
                        @csrf
                    <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
                @endif
                @if(Auth::check() && Auth::user()->level == 'petugas')
                <td>
                    <a href="{{route('pembayaran.edit',$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{route('pembayaran.destroy',$item->id)}}" method="POST" class="d-inline-block">
                        @method('delete')
                        @csrf
                    <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
                @endif -->
            </tr>
            @endforeach
            @endif
    @else
    <h1>No Result</h1>
    Result : {{$pembayaran->count()}}
    @endif
        </tbody>
    </table>
    <form action="{{route('searchSiswa')}}" method="POST">
    @csrf
    @method('post')
        <input type="text" name="search" placeholder="Input Nisn Siswa">
    </form>
</div>


@endsection
@section('addon')
<!-- Cetak Histori Using Javascript Code -->
<!-- <script type="text/javascript">
    window.print();
</script> -->
@endsection