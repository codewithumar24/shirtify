
@extends('admin.layout')

@section('main')

<div class="container mt-5">
    <h2 class="mb-4">Create New Category</h2>
  
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
  
    <form action="{{ route('admin.category.store') }}" method="POST">
      @csrf
  
      <div class="mb-3">
        <label for="name" class="form-label">Category Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
        @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
  
      <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
  </div>
  @endsection