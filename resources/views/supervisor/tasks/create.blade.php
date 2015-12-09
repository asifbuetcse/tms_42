@extends('layouts.supervisor')
@section('content')
<div id="register" class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Add a task</h2>
            </div>
            <div class="panel-body">
                @include('common.errors')
                {!! Form::open(['route' => ['supervisor.subjects.tasks.store', 'subjectId' => $subject->id]])!!}
                    <div class="form-group">
                        {!! Form::label('subjectName', 'Subject', ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::label($subject->name) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::text('name') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('details', 'Details', ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::textarea('description') !!}
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            {!! Form::submit('Add Task') !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection