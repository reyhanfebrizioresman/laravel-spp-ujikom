@extends('layouts.template')
@section('title','Kelas')
@section('subjudul','Kelas')
@section('content')

<div class="container">
<a href="{{route('kelas.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <!-- <th>Id Kelas</th> -->
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <!-- <td>{{$item->id}}</td> -->
                <td>{{$item->nama_kelas}}</td>
                <td>{{$item->walikelas_kelas}}</td>
                <td>
                    <a href="{{route('kelas.edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{route('kelas.destroy',$item->id)}}" method="POST" class="d-inline-block">
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