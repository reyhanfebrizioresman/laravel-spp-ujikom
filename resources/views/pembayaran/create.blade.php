@extends('layouts.template')
@section('title','Pembayaran')
@section('subjudul','Pembayaran')
@section('content')


<div class="container">
    <form action="{{route('pembayaran.store')}}" method="POST">
        @method('post')
        @csrf
        <div class="form-group">
        <label for="">Nisn</label>
        <select class="selectpicker" multiple data-live-search="true" name="nisn">
            @foreach($siswa as $row)
            <option value="{{$row->nisn}}">{{$row->nisn}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="">Tanggal Bayar</label>
            <input type="date" name="tanggal_bayar" class="form-control">
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
            <input type="text" name="jumlah_bayar" class="form-control" >
        </div>
        <div class="form-group">
            <label for="">Id Petugas</label>
            <select name="id_petugas" id="" class="form-control" required readonly="">
                <option value="{{Auth::user()->id}}"
                @if(Auth::user()->name)
                selected
                @endif
                >{{Auth::user()->name}}</option>
            </select>
        </div>
        <!-- <div class="form-group">
            <label for="">Petugas</label>
            <input type="text" name="id_petugas" class="form-control" value="{{Auth::user()->id}}" required readonly="">
        </div> -->
        <button class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>


@endsection

@section('addon')
<script>
$('select').selectpicker();
</script>

@endsection