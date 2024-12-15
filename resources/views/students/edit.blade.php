@extends('layout')
@section('content')

<div class="card mt-4">
  <div class="card-header">
    <h2>Edit Student </h2>
  </div>
  <div class="card-body">
    <form action="{{ url('students/' . $students->id) }}" method="post">
      @csrf
      @method('PATCH')

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $students->name) }}" class="form-control">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-3">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ old('address', $students->address) }}" class="form-control">
        @error('address')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-3">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="{{ old('mobile', $students->mobile) }}" class="form-control">
        @error('mobile')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email', $students->email) }}" class="form-control">
        @error('email')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-4">
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ url('students') }}" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
</div>

@stop
