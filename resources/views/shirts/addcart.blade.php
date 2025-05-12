
@extends("layouts.app")

@section("content")

<link rel="stylesheet" href="{{ asset('css/addcart.css') }}">
<!-- Cart Page -->
<div class="container my-5">
    <h2 class="mb-4">Your Shopping Cart</h2>
  
    <div class="row">
      <!-- Cart Table -->
      <div class="col-lg-8">
        <div class="table-responsive">
          <table class="table align-middle">
            <thead class="table-light">
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th style="width: 120px;">Quantity</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <!-- Item 1 -->
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://images.unsplash.com/photo-1598033129183-c4f50c736f10?auto=format&fit=crop&w=600&q=80"
                         class="cart-img me-3" alt="Shirt">
                    <span>Classic Formal Shirt</span>
                  </div>
                </td>
                <td>$29.99</td>
                <td>
                  <input type="number" class="form-control" min="1" value="1">
                </td>
                <td>$29.99</td>
                <td><i class="fas fa-trash remove-btn"></i></td>
              </tr>
  
              <!-- Item 2 -->
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?auto=format&fit=crop&w=600&q=80"
                         class="cart-img me-3" alt="Shirt">
                    <span>Casual Summer Shirt</span>
                  </div>
                </td>
                <td>$24.99</td>
                <td>
                  <input type="number" class="form-control" min="1" value="2">
                </td>
                <td>$49.98</td>
                <td><i class="fas fa-trash remove-btn"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
  
        <div class="mt-4">
          <a href="{{ route("shirts.shop") }}" class="btn btn-outline-secondary me-2">
            <i class="fas fa-arrow-left me-1"></i>Continue Shopping
          </a>
        </div>
      </div>
  
      <!-- Summary -->
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="cart-summary shadow-sm">
          <h5>Order Summary</h5>
          <hr />
          <p class="d-flex justify-content-between">
            <span>Subtotal</span>
            <span>$79.97</span>
          </p>
          <p class="d-flex justify-content-between">
            <span>Shipping</span>
            <span>$5.00</span>
          </p>
          <hr />
          <h5 class="d-flex justify-content-between">
            <span>Total</span>
            <span>$84.97</span>
          </h5>
          <a class="btn btn-primary w-100 mt-3" href="{{ route("shirts.checkout") }}"> <i class="fas fa-credit-card me-1"></i>Proceed to Checkout</a>
          
        </div>
      </div>
    </div>
  </div>
  @endsection