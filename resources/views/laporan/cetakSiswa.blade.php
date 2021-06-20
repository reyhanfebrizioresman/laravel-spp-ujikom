@extends('layouts.app')
@section('title','CetakHistori')
@section('sub-judul','CetakHistori')
@section('content')

        <div class="container">
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
                </tr>
                
                @endforeach
            </tbody>
        </table>
        <a href="{{url('laporan')}}" class="btn btn-primary btn-sm ">Kembali</a>
        </div>
        

@endsection
@section('addon')
<script type="text/javascript">
    window.print();
</script>
@endsection