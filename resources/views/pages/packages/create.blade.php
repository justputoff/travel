@extends('layouts.main')

@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Create Package</h5>
    <div class="card-body">
      <form action="{{ route('packages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
          <label for="destination_id" class="form-label">Destination</label>
          <select class="form-control" id="destination_id" name="destination_id" required>
            @foreach($destinations as $destination)
              <option value="{{ $destination->id }}">{{ $destination->name }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<!-- / Content -->

@endsection
