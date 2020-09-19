@extends('layouts.app')

@section('header')
<div class="row justify-content-md-center">
    <div class="col-md-12">
        <h3>
            <i class="fas fa-align-justify"></i> Task
            <a class="btn btn-outline-success float-right" href="{{ route('tasks.create') }}"><i class="fas fa-plus"></i> Create</a>
        </h3>
    </div>
</div>
@endsection

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-12">
        @if($tasks->count())
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Completed</th>
                    <th class="text-right">OPTIONS</th>
                </tr>
            </thead>

            <tbody>
            @foreach($tasks as $task)
            <tr>
                <td class="text-center"><strong>{{$task->id}}</strong></td>

                <td>{{$task->subject}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->due_date}}</td>
                <td><input type="checkbox" disabled @if( $task->completed ) checked @endif/></td>

                <td class="text-right">
                    <a class="btn btn-outline-primary" href="{{ route('tasks.show', $task->id) }}">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <a class="btn btn-outline-warning" href="{{ route('tasks.edit', $task->id) }}">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;"
                    onsubmit="return confirm('消すんか？まじか？？');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-outline-danger">
                    <i class="fas fa-trash"></i> Delete
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $tasks->render() !!}
        @else
        <h3 class="text-center alert alert-info">Empty!</h3>
        @endif
    </div>
</div>
@endsection