@extends('adminlte::page')

@section('title')
    Create New Employee
@endsection
@section('content')

    <div class="col-md-8 col-md-offset-2">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(!$employee->firstname)
            {!! Form::model($employee, ['route' => ['employees.store'], 'class'=>'form-horizontal'  ]) !!}
        @else
            {!! Form::model($employee, ['route' => ['employees.update', $employee->id], 'method'=>'PUT', 'class'=>'form-horizontal' ]) !!}
        @endif
        <div class="form-group">
            {!! Form::label('firstname', 'First name:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::text('firstname', null, ['class'=>'form-control']) !!}
            </div>
        </div>
            <div class="form-group">
                {!! Form::label('lastname', 'Last name:', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::text('lastname', null, ['class'=>'form-control']) !!}
                </div>
            </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
        </div>
            <div class="form-group">
                {!! Form::label('phone', 'Phone', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('company', 'Company', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::select('company', $company, ['class'=>'form-control', 'multiple'=>true]) !!}
                </div>
            </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                {!! Form::submit('Save in base', ['class'=>'btn btn-info']) !!}
            </div>
        </div>


        {!! Form::close() !!}


    </div>

@endsection