@extends('layouts.main')

@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Package Details</h5>
    <div class="card-body">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $package->name }}" readonly>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" readonly>{{ $package->description }}</textarea>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $package->price }}" readonly>
      </div>
      <div class="mb-3">
        <label for="destination_id" class="form-label">Destination</label>
        <input type="text" class="form-control" id="destination_id" name="destination_id" value="{{ $package->destination->name }}" readonly>
      </div>
      <a href="{{ route('packages.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
</div>
<!-- / Content -->

@endsection
