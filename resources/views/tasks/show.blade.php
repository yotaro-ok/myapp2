@extends('layouts.app')

@section('header')
<div class="page-header" align="center">
  <h3><i class="fas fa-eye"></i>Task / Show #{{$task->id}}</h3>
</div>
@endsection

@section('content')
  <div class="row justify-content-md-center">
    <div class="col-md-8">
      <a class="btn btn-link pull-right" href="{{ route('tasks.index') }}"><i class="fas fa-backward"></i> Back</a>
      <a class="btn btn-sm btn-warning float-right" href="{{ route('tasks.edit', $task->id) }}">
        <i class="fas fa-edit"></i> Edit
      </a>
    </div>
  </div>
<div class="row justify-content-md-center">
      <div class="col-md-8">
        <label>Subject</label>
        <p style="background-color:#EDF7FF;width:auto;padding:10px;border:1px solid #ccc">
          {{ $task->subject }}
        </p>
        <label>Description</label>
        <p style="background-color:#EDF7FF;width:auto;padding:10px;border:1px solid #ccc">
          {{ $task->description }}
        </p>
        <label>Due Date</label>
        <p style="background-color:#EDF7FF;width:auto;padding:10px;border:1px solid #ccc">
          {{ $task->due_date }}
        </p>
        <label>Completed</label>
        <p>
          <input type="checkbox" disabled @if( $task->completed ) checked @endif/>
        </p>
      </div>
</div>
@endsection