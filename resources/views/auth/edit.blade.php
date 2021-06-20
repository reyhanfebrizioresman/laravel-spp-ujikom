@extends('layouts.template')
@section('title','User')
@section('subjudul','User')
@section('content')
<div class="container">
    <form action="{{ route('user.update', $users->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $users->name }}" required
                    autofocus>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <label for="username" class="col-md-4 control-label">Username</label>
            <div class="col-md-6">
                <input id="username" type="text" class="form-control" name="username" value="{{ $users->username }}"
                    required readonly="">
                @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ $users->email }}" required
                    readonly="">
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
            <label for="level" class="col-md-4 control-label">Level</label>
            <div class="col-md-6">
                <select class="form-control" name="level" required="">
                    <option value="admin" @if($users->level == 'admin') selected @endif>Admin
                    </option>
                    <option value="user" @if($users->level == 'user') selected @endif>User
                    </option>
                </select>
            </div>
        </div>


        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control" onkeyup='check();' name="password">
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm
                Password</label>
            <div class="col-md-6">
                <input id="confirm_password" type="password" onkeyup="check()" class="form-control"
                    name="password_confirmation">
                <span id='message'></span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">
            Update
        </button>
        <a href="{{route('user.index')}}" class="btn btn-light pull-right">Back</a>
    </form>
</div>

@endsection