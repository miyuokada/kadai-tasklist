@extends('layout.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
   
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        {!! Form::model($task, ['route'=>'tasks.store']) !!}
            <div class="form-group">
                {!! Form::label('content', 'task') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'status') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
    
    


@endsection