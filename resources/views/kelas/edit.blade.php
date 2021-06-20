@extends('layouts.template')
@section('title','Kelas')
@section('subjudul','Kelas')
@section('content')

<div class="container">
    <form action="{{route('kelas.update',$kelas->id)}}" method="POST">
        @method('put')
        @csrf
        <!-- <div class="form-group">
            <label for="">Id Kelas</label>
            <input type="text" name="" class="form-control">
        </div> -->
        <div class="form-group">
            <label for="">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{$kelas->nama_kelas}}">
        </div>
        <div class="form-group">
            <label for="">WaliKelas</label>
            <input type="text" name="walikelas_kelas" class="form-control" value="{{$kelas->walikelas_kelas}}">
        </div>
        <button class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>


@endsection