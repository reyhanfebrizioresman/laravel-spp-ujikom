@extends('layouts.app')
@section('title','CetakHistori')
@section('sub-judul','CetakHistori')
@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <!-- <th>Id Kelas</th> -->
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <!-- <td>{{$item->id}}</td> -->
                <td>{{$item->nama_kelas}}</td>
                <td>{{$item->walikelas_kelas}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{url('laporan')}}" class="btn btn-primary btn-sm ">Kembali</a>
</div>


@endsection
@section('addon')
<!-- Cetak Histori Using Javascript Code -->
<script type="text/javascript">
    window.print();
</script>
@endsection