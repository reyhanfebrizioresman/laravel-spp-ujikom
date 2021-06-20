@extends('layouts.template')
@section('title','Spp')
@section('subjudul','Spp')
@section('content')

<div class="container">
    <form action="{{route('spp.store')}}" method="POST">
        @method('post')
        @csrf
        <div class="form-group">
            <label for="">Tahun</label>
            <input type="text" name="tahun" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nominal</label>
            <input type="number" name="nominal" class="form-control">
        </div>
        <button class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>


@endsection