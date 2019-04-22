@extends('adminlte::page')

@section('title')
    Company
@endsection
@section('content_header')
    <h1>Company table</h1>
@stop

@section('content')
    <a href="{{url('/admin/company/create')}}"><button class="btn btn-info">Create New Company</button></a><br><br>

    <table id="company" class="display table">
        <thead>
        <tr>
            <th>№</th>
            <th>Company Name</th>
            <th>E-Mail</th>
            <th>Web Site</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        @foreach($company as $value)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->website }}</td>
                <td><a href="{{url('/admin/company/' . $value->id . '/edit')}}" ><buttor class="btn btn-info">Edit</buttor></a>
                    {!!Form::open(['url'=>'admin/company/'.$value->id,'method'=>'DELETE', 'style'=>'display:inline'])!!}
                    {!!Form::submit('Delete', ['class'=>'btn btn-danger'])  !!}
                    {!!Form::close()!!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#company').DataTable();
        } );
    </script>
@endsection

