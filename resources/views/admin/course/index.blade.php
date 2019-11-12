@extends('admin.template.master')

@section('title','Course')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10">#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($courses) == 0)
                    <tr>
                        <td colspan="2" class="text-center">No courses found</td>
                    </tr>
                    @else
                        @foreach ($courses as $course)
                        <tr>
                            <td width="10">{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection