@extends('layouts.app')
@section('title','CetakHistori')
@section('sub-judul','CetakHistori')
@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tahun</th>
                <th>Nominal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spp as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->tahun}}</td>
                <td>Rp. {{$item->nominal}}</td>
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