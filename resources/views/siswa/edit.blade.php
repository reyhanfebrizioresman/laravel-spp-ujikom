@extends('layouts.template')
@section('title','Siswa')
@section('subjudul','Siswa')
@section('content')

<div class="container">
    <form action="{{route('siswa.update',$siswa->id)}}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="">Nisn</label>
            <input type="text" name="nisn" class="form-control" value="{{$siswa->nisn}}">
        </div>
        <div class="form-group">
            <label for="">Nis</label>
            <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}">
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}">
        </div>
        <div class="form-group">
            <label for="">id_kelas</label>
            <select name="id_kelas" id="" class="form-control">
                <option value="">----- Pilih Salah Satu -----</option>
                @foreach($kelas as $row)
                <option value="{{$row->id}}"
                @if($row->id)
                selected
                @endif
                >{{$row->nama_kelas}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">KompetesiKeahlian</label>
            <input type="text" name="kompetensi_keahlian" class="form-control" value="{{$siswa->kompetensi_keahlian}}">
        </div>
        <div class="form-group">
            <label for="">alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{$siswa->alamat}}">
        </div>
        <div class="form-group">
            <label for="">No_Telp</label>
            <input type="number" name="no_telepon" class="form-control" value="{{$siswa->no_telepon}}">
        </div>
        <button class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>


@endsection