@extends("layouts.app")

@section("content")
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">

<h2 class="fw-bold mb-4 text-center">All Shirts</h2>

<!-- Filter Bar -->
<div class="container py-3">
  <div class="row filter-bar">
    <div class="col-md-4 mb-3">
      <select class="form-select">
        <option selected>Sort by</option>
        <option value="1">Newest</option>
        <option value="2">Price: Low to High</option>
        <option value="3">Price: High to Low</option>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <select class="form-select">
        <option selected>Category</option>
        <option value="formal">Formal</option>
        <option value="casual">Casual</option>
        <option value="denim">Denim</option>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <input type="text" class="form-control" placeholder="Search products..." />
    </div>
  </div>

  <!-- Product Grid -->
  <div class="row">
    @foreach ($shirts as $shirt)
    <div class="col-md-4 mb-4">
      <!-- Wrap entire card in clickable link -->
      <a href="{{ route('shirts.product', $shirt->id) }}" class="text-decoration-none text-dark">
        <div class="card product-card position-relative h-100">
          <span class="badge bg-danger badge-new">New</span>
          <img src="{{ asset('storage/' . $shirt->image_path) }}" class="card-img-top product-img" alt="{{ $shirt->name }}" />
          <div class="card-body">
            <h5 class="card-title">{{ $shirt->name }}</h5>
            <p class="card-text text-muted">{!! $shirt->description !!}</p>
            <div class="d-flex justify-content-between">
              <span class="fw-bold">${{ $shirt->price }}</span>
              <span class="btn btn-sm btn-outline-primary">View</span>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection
