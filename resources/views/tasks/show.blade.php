@extends('layout.app')

@section('content')

    <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

    <p>{{ $task->content }}</p>
     {!! link_to_route('tasks.edit', 'このメッセージ編集', ['id' => $task->id]) !!}

@endsection