@extends('layouts.template')
@section('title','User')
@section('subjudul','User')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-2">
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>
                Tambah User</a>
        </div>
        <div class="col-lg-12">
            @if (Session::has('message'))
            <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">
                {{ Session::get('message') }}</div>
            @endif
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Data User</h4>

                    <div class="table-responsive">
                        <table id="table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <!-- <th>Email</th> -->
                                    <th>Level</th>
                                    <th>Created</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->username}}</td>
                                    <!-- <td>{{$data->email}}</td> -->
                                    <td>{{$data->level}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <a href="{{route('user.edit',$data->id)}}" class="btn btn-primary btn-sm"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{route('user.destroy',$data->id)}}" method="POST"
                                            class="d-inline-block">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- {!! $datas->links() !!} --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection