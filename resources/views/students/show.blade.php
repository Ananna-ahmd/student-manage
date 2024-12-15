@extends('layout')
@section('content')

<div class="card mt-4">
  <div class="card-header">
    <h2>Student Details</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">Name: {{ $students->name }}</h5>
    <p class="card-text"><strong>Address:</strong> {{ $students->address }}</p>
    <p class="card-text"><strong>Mobile:</strong> {{ $students->mobile }}</p>
    <p class="card-text"><strong>Email:</strong> {{ $students->email }}</p>
  </div>
  <div class="card-footer">
    <a href="{{ url('students') }}" class="btn btn-primary">Back to Students</a>
    <a href="{{ url('students/' . $students->id . '/edit') }}" class="btn btn-warning">Edit</a>
    <form action="{{ url('students/' . $students->id) }}" method="POST" style="display:inline-block;">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
    </form>
  </div>
</div>

@stop
