@extends('layouts.main')

@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Make Payment</h5>
    <div class="card-body">
      <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="booking_id" value="{{ $booking->id }}">
        <div class="mb-3">
          <label for="user" class="form-label">User</label>
          <input type="text" class="form-control" id="user" name="user" value="{{ $booking->user->name }}" readonly>
        </div>
        <div class="mb-3">
          <label for="package" class="form-label">Package</label>
          <input type="text" class="form-control" id="package" name="package" value="{{ $booking->package->name }}" readonly>
        </div>
        <div class="mb-3">
          <label for="booking_date" class="form-label">Booking Date</label>
          <input type="text" class="form-control" id="booking_date" name="booking_date" value="{{ $booking->booking_date }}" readonly>
        </div>
        <div class="mb-3">
          <label for="number_of_people" class="form-label">Number of People</label>
          <input type="number" class="form-control" id="number_of_people" name="number_of_people" value="{{ $booking->number_of_people }}" readonly>
        </div>
        <div class="mb-3">
          <label for="total_price" class="form-label">Total Price</label>
          <input type="number" class="form-control" id="total_price" name="total_price" value="{{ $booking->total_price }}" readonly>
        </div>
        <div class="mb-3">
          <label for="payment_method" class="form-label">Payment Method</label>
          <select class="form-control" id="payment_method" name="payment_method" required>
            <option value="credit_card">Credit Card</option>
            <option value="bank_transfer">Bank Transfer</option>
            <option value="paypal">PayPal</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Pay Now</button>
      </form>
    </div>
  </div>
</div>
<!-- / Content -->

@endsection