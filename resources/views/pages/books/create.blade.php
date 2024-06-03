@extends('layouts.main')

@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Book Package</h5>
    <div class="card-body">
      <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="hidden" name="package_id" value="{{ $package->id }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="mb-3">
          <label for="booking_date" class="form-label">Booking Date</label>
          <input type="date" class="form-control" id="booking_date" name="booking_date" required>
        </div>
        <div class="mb-3">
          <label for="number_of_people" class="form-label">Number of People</label>
          <input type="number" class="form-control" id="number_of_people" name="number_of_people" required>
        </div>
        <div class="mb-3">
          <label for="total_price" class="form-label">Total Price</label>
          <input type="number" class="form-control" id="total_price" name="total_price" value="{{ $package->price }}" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
      </form>
    </div>
  </div>
</div>
<!-- / Content -->

@endsection