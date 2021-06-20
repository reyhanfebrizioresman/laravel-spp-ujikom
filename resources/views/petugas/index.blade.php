@extends('layouts.template')
@section('title','Petugas')
@section('subjudul','Petugas')
@section('content')


<div class="container">
    <a href="{{route('register')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->level}}</td>
                <td>
                    <a href="{{route('siswa.edit',$item->id)}}" class="btn btn-primary btn-sm"><i
                            class="fas fa-edit"></i></a>
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