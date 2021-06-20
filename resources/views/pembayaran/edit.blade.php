@extends('layouts.template')
@section('title','Pembayaran')
@section('subjudul','Pembayaran')
@section('content')


<div class="container">
    <form action="{{route('pembayaran.update',$pembayaran->id)}}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
        <label for="">Nisn</label>
        <select class="selectpicker form-control" multiple data-live-search="true" name="nisn">
            @foreach($siswa as $row)
            <option value="{{$row->nisn}}"
                @if($row->nisn)
                selected
                @endif
            >{{$row->nisn}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="">Tanggal Bayar</label>
            <input type="date" name="tanggal_bayar" class="form-control" value="{{$pembayaran->tanggal_bayar}}">
        </div>
        <!-- <div class="form-group">
            <label for="">Bulan Bayar</label>
            <input type="text" name="bulan_bayar" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Tahun Bayar</label>
            <input type="text" name="tahun_bayar" class="form-control">
        </div> -->
        <div class="form-group">
            <label for="">Jumlah Bayar</label>
            <input type="text" name="jumlah_bayar" class="form-control" value="{{$pembayaran->jumlah_bayar}}">
        </div>

        <button class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>


@endsection

@section('addon')
<script>
$('select').selectpicker();
</script>

@endsection