@extends('layouts.template')
@section('title','Siswa')
@section('subjudul','Siswa')
@section('content')

        <div class="container">
    <a href="{{route('siswa.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>Tambah</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nisn</th>
                    <th>Nis</th>
                    <th>Nama.</th>
                    <th>Kelas</th>
                    <th>KompetesiKeahlian</th>
                    <th>Alamat</th>
                    <th>No_Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $item)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nisn}}</td>
                <td>{{$item->nis}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->nama_kelas}}</td>
                <td>{{$item->kompetensi_keahlian}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->no_telepon}}</td>
                <td>
                    <a href="{{route('siswa.edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <form action={{route('siswa.destroy',$item->id)}} method="POST" class="d-inline-block">
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