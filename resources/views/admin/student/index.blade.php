@extends('admin.template.master')


@section('title','Student')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{ url('students/create') }}" class="btn btn-primary btn-sm float-right mb-2">
                <span class="glyphicon glyphicon-plus"></span>
                Add
            </a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Courses</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($students) == 0)
                    <tr>
                        <td colspan="2" class="text-center">No student found</td>
                    </tr>
                    @else
                    @foreach ($students as $student)
                    <tr>
                        <td width="10">{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            @foreach ($student->courses as $course)
                                <span class="badge badge-info">{!! $course->name !!} </span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ url('students/'. $student->id . '/edit') }}" class="btn btn-info btn-sm" >Edit</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'url' => 'students/'.$student->id, 'id'=>'deleteForm']) !!} 
                            {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!} 
                            {!! Form::close() !!} 

                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection