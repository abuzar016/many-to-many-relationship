@extends('admin.template.master')

@section('title','Edit')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            {!! Form::open(['url' => 'students/'.$student->id, 'method' => 'patch']) !!}
                <div class="form-group">
                    {!! Form::label('Name') !!}
                    {!! Form::text('name',$student->name,['placeholder' => 'Name','class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email') !!}
                    {!! Form::email('email',$student->email,['placeholder' => 'Email','class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Select Course') !!} 
                    {!! Form::select('courses[]',$courses,null,['multiple' => 'multiple', 'class' => 'form-control courses']) !!} 
                </div>
           
                {!! Form::submit('Update',['class'=>'btn btn-primary float-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('javascripts')
    <script type="text/javascript">
        $('.courses').select2().val({!! json_encode($student->courses()->allRelatedIds()) !!}).trigger('change');
    </script>
@endsection