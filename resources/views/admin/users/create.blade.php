@extends("layouts.admin")
@section("content")
    <h1>Create page</h1>
    {!! Form::open(['method' => 'POST','action' => 'AdminUsersController@store','files' => true]) !!}
        <div class="form-group">
            {{ Form::label('name' , 'name:') }}
            {{ Form::text('name' , null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email' , 'email:') }}
            {{ Form::email('email' , null, ['class' => 'form-control']) }}
        </div>
       <div class="form-group">
            {{ Form::label('is_active' , 'status:') }}
            {{ Form::select('is_active' ,array(1 => 'Active',0 => 'Not active'), 0 , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('role_id' , 'Role:') }}
            {{ Form::select('role_id' ,['' => 'Choose options'] + $roles ,null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password' , 'Password:') }}
            {{ Form::password('password',['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('photo_id' , 'Upload:') }}
            {{ Form::file('photo_id',['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Create Post' , ['class' => 'btn btn-primary']) }}
        </div>

    {!! Form::close() !!}
    @include('includes.form_error')





@stop