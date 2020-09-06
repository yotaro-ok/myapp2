@extends('layouts.app')

@section('header')
<div align="center">
  <h3>Task / Show #{{$task->id}}</h3>
</div>
@endsection

@section('content')
<div align="center">
  <div class="row justify-content-md-center">
    <div class="col-md-6">
      <a class="btn btn-sm btn-link" href="{{ route('tasks.index') }}">Back</a>
    </div>
    <div class="col-md-6">
      <a class="btn btn-sm btn-warning" href="{{ route('tasks.edit', $task->id) }}">
        Edit
      </a>
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-md-6">
    <label>Subject</label>
    <p>
      {{ $task->subject }}
    </p>
    <label>Description</label>
    <p>
      {{ $task->description }}
    </p>
    <label>Due Date</label>
    <p>
      {{ $task->due_date }}
    </p>
    <label>Completed</label>
    <p>
      <input type="checkbox" disabled @if( $task->completed ) checked @endif/>
    </p>

  </div>
</div>
@endsection