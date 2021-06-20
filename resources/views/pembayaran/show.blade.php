@extends('layouts.app')
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
                <th>Id Petugas</th>
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
                <td>{{$item->user->name}}</td>
                @if(Auth::check() && Auth::user()->level == 'admin')
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
                @endif
                <td>
                Cant Edit And Delete
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection