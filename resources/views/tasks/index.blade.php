@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    {{-- ページネーションのリンク --}}
    <div class="d-flex justify-content-center">
        {{ $tasks->links() }}
    </div>
    <div class="d-flex justify-content-center">
        @if( $tasks->total() == 0)
            <p><span>{{  $tasks->total() }}</span> 件</p>
        @else
            <p><span>{{  $tasks->firstItem()}}</span> - <span>{{  $tasks->lastItem() }}</span> 件 / <span>{{  $tasks->total() }}</span> 件</p>
        @endif
    </div>
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                {{-- タスク詳細ページへのリンク --}}
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- ページネーションのリンク --}}
    <div class="d-flex justify-content-center">
        {{ $tasks->links() }}
    </div>
    <div class="d-flex justify-content-center">
        @if( $tasks->total() == 0)
            <p><span>{{  $tasks->total() }}</span> 件</p>
        @else
            <p><span>{{  $tasks->firstItem()}}</span> - <span>{{  $tasks->lastItem() }}</span> 件 / <span>{{  $tasks->total() }}</span> 件</p>
        @endif
    </div>
    
    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規タスクの登録', [], ['class' => 'btn btn-primary']) !!}

@endsection