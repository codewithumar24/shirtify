@extends("layouts.app")

@section("content")
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<div class="container py-5">
    <div class="row align-items-center g-5">
      <!-- Image Column -->
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500x400?text=Our+Team" alt="About Us" class="about-img">
      </div>
  
      <!-- Text Column -->
      <div class="col-md-6">
        <h2 class="section-title mb-3">About Our Brand</h2>
        <p>We are passionate about providing top-quality shirts with modern styles and unbeatable comfort. Our team of fashion enthusiasts brings you collections that are both trendy and timeless.</p>
        <p>From casual wear to formal shirts, we ensure that every piece is crafted with care and designed to impress.</p>
  
        <div class="value-box">
          <h5>🎯 Our Mission</h5>
          <p>Deliver stylish, affordable, and premium-quality shirts for everyone.</p>
        </div>
  
        <div class="value-box">
          <h5>💡 Our Vision</h5>
          <p>To be a leading online brand in fashion, known for quality and customer trust.</p>
        </div>
  
        <div class="value-box">
          <h5>🤝 Core Values</h5>
          <p>Quality, Trust, Style, Innovation, and Customer Satisfaction.</p>
        </div>
      </div>
    </div>
  </div>
  @endsection