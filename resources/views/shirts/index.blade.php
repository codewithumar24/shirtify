@extends("layouts.app")

@section("content")
 <!-- Hero Banner -->
 <section class="hero-banner text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Premium Quality Shirts</h1>
        <p class="lead">Discover our latest collection of stylish and comfortable shirts</p>
        <a href="{{ route("shirts.shop") }}" class="btn btn-primary btn-lg mt-3">Shop Now</a>
    </div>
</section>
<!-- Featured Products -->
<section class="container mb-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Latest Shirts</h2>
        <p class="text-muted">Check out our newest arrivals</p>
    </div>
    <div class="row">
        <!-- Product 1 -->
       @foreach ($shirts as $shirt)
           <div class="col-md-4">
            <div class="card product-card">
                <span class="badge bg-danger badge-new">New</span>
                <img src="{{ asset('storage/'. $shirt->image_path) }}" class="card-img-top product-img" alt="Formal Shirt">
                <div class="card-body">
                    <h5 class="card-title">{{$shirt->name}}</h5>
                    <p class="card-text text-muted">{!!$shirt->description!!}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold">${{$shirt->price}}</span>
                        <a href="#" class="btn btn-sm btn-outline-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div> 
       @endforeach     
    </div>
    <div class="text-center mt-4">
        <a href="{{ route("shirts.shop") }}" class="btn btn-outline-primary">View All Products</a>
    </div>
</section>
<!-- Features Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="p-4">
                    <i class="fas fa-truck fa-3x mb-3 text-primary"></i>
                    <h4>Free Shipping</h4>
                    <p class="mb-0">Free delivery on all orders over $50</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="p-4">
                    <i class="fas fa-undo fa-3x mb-3 text-primary"></i>
                    <h4>Easy Returns</h4>
                    <p class="mb-0">30-day return policy on all items</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4">
                    <i class="fas fa-lock fa-3x mb-3 text-primary"></i>
                    <h4>Secure Payment</h4>
                    <p class="mb-0">100% secure payment processing</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection