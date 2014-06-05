@extends('layouts.master')

@section('content')
<div class="row">
    <div style="margin-top: 40px;"></div>
    <div class="col-md-offset-3 col-md-6">
        {{ Form::open(array('url' => 'login')) }}
        <div class="form-group">
            {{ Form::label('username', 'Display Username') }}
            {{ Form::text('username', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label>
                {{ Form::checkbox('remember_me', 'remember_me', false) }} Remember me
            </label>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>

        {{ Form::close() }}
    </div>
</div>
@stop
