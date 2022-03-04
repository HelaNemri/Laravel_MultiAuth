@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ooops!!</strong>There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['method' => 'POST', 'route' => 'users.store', 'class' => 'form-horizontal']) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Name :') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Name']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Email :') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email']) !!}
                <small class="text-danger">{{ $errors->first('email') }}</small>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                {!! Form::label('password', 'Password :') !!}
                {!! Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password']) !!}
                <small class="text-danger">{{ $errors->first('password') }}</small>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('confirm-password') ? ' has-error' : '' }}">
                {!! Form::label('confirm-password', 'Confirm Password :') !!}
                {!! Form::password('confirm-password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Confirm Password']) !!}
                <small class="text-danger">{{ $errors->first('confirm-password') }}</small>
            </div>
        </div>
        <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
            {!! Form::label('Role', 'Role :') !!}
            {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'required' => 'required', 'multiple']) !!}
            <small class="text-danger">{{ $errors->first('inputname') }}</small>
        </div>
        <div class="col-xs-12 col-sm12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
