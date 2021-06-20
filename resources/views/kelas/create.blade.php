@extends('layouts.template')
@section('title','Kelas')
@section('subjudul','Kelas')
@section('content')

<div class="container">
    <form action="{{route('kelas.store')}}" method="POST">
        @method('post')
        @csrf
        <!-- <div class="form-group">
            <label for="">Id Kelas</label>
            <input type="text" name="" class="form-control">
        </div> -->
        <div class="form-group">
            <label for="">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control">
        </div>
        <div class="form-group">
            <label for="">WaliKelas</label>
            <input type="text" name="walikelas_kelas" class="form-control">
        </div>
        <button class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>


@endsection