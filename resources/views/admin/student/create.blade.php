@extends('admin.template.master')

@section('title','Home')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            {!! Form::open(['url' => 'students']) !!}
                <div class="form-group">
                    {!! Form::label('Name') !!}
                    {!! Form::text('name',null,['placeholder' => 'Name','class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email') !!}
                    {!! Form::email('email',null,['placeholder' => 'Email','class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Select Course') !!} 
                    {!! Form::select('courses[]',$courses,null,['multiple' => 'multiple', 'class' => 'form-control courses']) !!} 
                </div>
           
                {!! Form::submit('Create',['class'=>'btn btn-primary float-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection