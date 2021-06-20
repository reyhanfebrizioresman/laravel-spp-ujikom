@extends('layouts.app')
@section('title','CetakPetugas')
@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petugas as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->level}}</td>
                <td>{{$data->created_at}}</td>
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