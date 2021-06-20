@extends('layouts.template')
@section('title','Pembayaran')
@section('subjudul','Pembayaran')
@section('content')


<div class="container">
<a href="{{route('pembayaran.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>Tambah</a>
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
                <th>Aksi</th>
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
                <td>
                    <a href="{{route('pembayaran.edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{route('pembayaran.destroy',$item->id)}}" method="POST" class="d-inline-block">
                        @method('delete')
                        @csrf
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection