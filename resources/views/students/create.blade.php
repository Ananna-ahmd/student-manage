@extends('layout')
@section('content')

<div class="card">
  <div class="card-header"> Student</div>
  <div class="card-body">

      <form action="{{ url('students') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
          @error('name')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
          @error('address')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="mobile">Mobile</label>
          <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old('mobile') }}">
          @error('mobile')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
          @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Save</button>
      </form>

  </div>
</div>

@stop
