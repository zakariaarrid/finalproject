@extends("layouts.admin")
@section("content")
    <h1>Create page</h1>
    {!! Form::open(['method' => 'POST','action' => 'AdminUsersController@store']) !!}
        <div class="form-group">
            {{ Form::label('Name' , 'Name:') }}
            {{ Form::text('Name' , null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('Email' , 'Email:') }}
            {{ Form::email('Email' , null, ['class' => 'form-control']) }}
        </div>
       <div class="form-group">
            {{ Form::label('Status' , 'status:') }}
            {{ Form::select('Status' ,array(1 => 'Active',0 => 'Not active'), 0 , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('role_id' , 'Role:') }}
            {{ Form::select('role_id' ,['' => 'Choose options'] + $roles ,null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('pwd' , 'Password:') }}
            {{ Form::password('pwd',['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Create Post' , ['class' => 'btn btn-primary']) }}
        </div>

    {!! Form::close() !!}

@stop