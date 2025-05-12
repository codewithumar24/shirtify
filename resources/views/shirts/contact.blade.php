@extends("layouts.app")

@section("content")

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<div class="container py-5">
    <h2 class="text-center mb-5">Contact Us</h2>
    <div class="row g-4">
      
      <!-- Contact Info -->
      <div class="col-md-5">
        <div class="p-4 contact-card h-100">
          <h5>Get in Touch</h5>
          <p>If you have any questions or inquiries, feel free to reach out using the form or contact info below.</p>
          <ul class="list-unstyled">
            <li><strong>Email:</strong> info@example.com</li>
            <li><strong>Phone:</strong> +92 300 1234567</li>
            <li><strong>Address:</strong> Lahore, Pakistan</li>
          </ul>
        </div>
      </div>
  
      <!-- Contact Form -->
      <div class="col-md-7">
        <div class="p-4 contact-card">
          <form>
            <div class="mb-3">
              <label class="form-label">Your Name</label>
              <input type="text" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control" placeholder="example@email.com" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Subject</label>
              <input type="text" class="form-control" placeholder="Enter subject" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control" rows="5" placeholder="Write your message..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
          </form>
        </div>
      </div>
  
    </div>
  </div>
@endsection  