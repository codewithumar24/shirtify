@extends("layouts.app")

@section("content")

<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
<div class="container py-5">
    <h2 class="text-center mb-4">Checkout</h2>
    
    <div class="row g-4">
      
      <!-- Shipping Details -->
      <div class="col-md-7">
        <div class="card p-4">
          <h4>Shipping Address</h4>
          <form>
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control" placeholder="example@example.com" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Phone Number</label>
              <input type="tel" class="form-control" placeholder="+92XXXXXXXXXX" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Address</label>
              <input type="text" class="form-control" placeholder="Street, City, Country" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Zip Code</label>
              <input type="text" class="form-control" placeholder="12345" required>
            </div>
          </form>
        </div>
      </div>
  
      <!-- Order Summary -->
      <div class="col-md-5">
        <div class="card p-4">
          <h4>Order Summary</h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between">
              <span>Subtotal</span>
              <strong>Rs. 3,000</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Shipping</span>
              <strong>Rs. 250</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total</span>
              <strong>Rs. 3,250</strong>
            </li>
          </ul>
          <button class="btn btn-primary w-100">Place Order</button>
        </div>
      </div>
  
    </div>
  </div>
  @endsection