@extends('admin.layout')

@section('main')

<div class="container mt-5">
    <a href="{{ route("admin.category.create") }}" class="btn btn-warning btn-sm">Create Category</a>
    <h2 class="mb-4 text-center">Category List</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle text-center shadow-sm">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Slug</th>
            <th>Created At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example row -->
          @foreach ($categorys as $category)

          <tr>
<td>{{$category->id}}</td>
<td>{{$category->name}}</td>
<td>{{$category->slug}}</td>
<td>{{$category->created_at}}</td>
<td>
  <a href="#" class="btn btn-sm btn-primary me-1">Edit</a>
  <form action="#" method="POST" style="display:inline-block;">
    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
  </form>
</td>


            
          </tr>
          @endforeach
          <!-- Repeat rows dynamically -->
        </tbody>
      </table>
    </div>
  </div>
  

@endsection