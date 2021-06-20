@extends('layouts.template')
@section('title','Spp')
@section('subjudul','Spp')
@section('content')
<div class="container">
<a href="{{route('spp.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spp as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->tahun}}</td>
                <td>Rp. {{$item->nominal}}</td>
                <td>
                    <a href="{{route('spp.edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{route('spp.destroy',$item->id)}}" method="POST" class="d-inline-block">
                        @method('delete')
                        @csrf
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection