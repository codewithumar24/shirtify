@extends("layouts.app")

@section("content")

<link rel="stylesheet" href="{{ asset('css/product.css') }}">

<section class="container my-5">
    <div class="row g-5">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $product->image_path) }}"
                 class="product-image shadow" alt="image"/>
        </div>
       <div class="col-md-6">
    <h2 class="fw-bold">{{ $product->name }}</h2>
    <p class="text-muted">Category: Formal Wear</p>
    <h4 class="text-primary">${{ $product->price }}</h4>
    <div class="mt-3 description">{!! $product->description !!}</div>
    <!-- rest of your code -->
            <div class="mb-3">
                <label class="form-label">Size:</label>
                <select class="form-select w-auto d-inline-block">
                    <option selected>Choose...</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>XL</option>
                </select>
            </div>

            <div class="mb-3 d-flex align-items-center">
                <label class="me-2">Quantity:</label>
                <input type="number" class="form-control quantity-input" value="1" min="1" />
            </div>

            <div class="d-grid gap-2 d-md-block">
                <a class="btn btn-primary me-2" href="{{ route("shirts.addcart") }}"><i class="fas fa-shopping-cart me-1"></i>Add to Cart</a>
                <button class="btn btn-outline-secondary"><i class="fas fa-heart me-1"></i>Wishlist</button>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="container my-5">
    <h3 class="text-center mb-4">Related Products</h3>
    <div class="row">
        @foreach ($related as $item)
        <div class="col-md-4">
            <div class="card product-card">
                <img src="{{ asset('storage/' . $item->image_path) }}"
                     class="card-img-top related-img" alt="{{ $item->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="text-muted">${{ $item->price }}</p>
                    <a href="{{ route('shirts.product', $item->id) }}"
                       class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
