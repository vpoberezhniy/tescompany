@extends('adminlte::page')

@section('title')
    Create New Company
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
        @if(!$company->name)
            {!! Form::model($company, ['route' => ['company.store'],'files' => true, 'class'=>'form-horizontal'  ]) !!}
        @else
            {!! Form::model($company, ['route' => ['company.update', $company->id], 'method'=>'PUT', 'files' => true, 'class'=>'form-horizontal'  ]) !!}
        @endif
        <div class="form-group">
            {!! Form::label('name', 'Company name:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
        </div>
            <div class="form-group">
                {!! Form::label('website', 'Web Site:', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::text('website', null, ['class'=>'form-control']) !!}
                </div>
            </div>
        <div class="form-group">
            {!! Form::label('logo', 'Logo:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::file('logo', ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                {!! Form::submit('Save in base ', ['class'=>'btn btn-info']) !!}
            </div>
        </div>

        {!! Form::close() !!}


    </div>

@endsection