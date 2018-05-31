@extends('layout.app')

@section('content')

<h1>New tasklist Page</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}


        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}



@endsection