@extends('layouts.app')

@section('content')

    <h1>ID = {{ $task->id }} の詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {{-- タスク編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', '編集', ['task' => $task->id], ['class' => 'btn btn-']) !!}
    
    {{-- タスク削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection