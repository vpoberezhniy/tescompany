@extends('adminlte::page')

@section('title')
    Employees
@endsection
@section('content_header')
    <h1>Employees table</h1>
@stop

@section('content')
    <a href="{{url('/admin/employees/create')}}"><button class="btn btn-info">Create New Employee</button></a><br><br>

    <table id="company" class="display table">
        <thead>
        <tr>
            <th>№</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-Mail</th>
            <th>Phone</th>
            <th>Company</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        @foreach($employee as $value)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $value->firstname }}</td>
                <td>{{ $value->lastname }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>
                <td>{{ $value->companyEmployeer->name or '' }}</td>
                <td><a href="{{url('/admin/employees/' . $value->id . '/edit')}}" ><buttor class="btn btn-info">Edit</buttor></a>
                    {!!Form::open(['url'=>'admin/employees/'.$value->id,'method'=>'DELETE', 'style'=>'display:inline'])!!}
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