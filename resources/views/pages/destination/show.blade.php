@extends('layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Detail Destination</h5>
    <div class="card-body">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" readonly>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" readonly>{{ $item->description }}</textarea>
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ $item->location }}" readonly>
      </div>
      <div class="mb-3">
        <label for="images" class="form-label">Images</label>
        <div class="row">
          @for ($i = 0; $i < 3; $i++)
            <div class="col-md-4 mb-3">
              <img src="https://source.unsplash.com/1600x900/?{{ $item->name }}&sig={{ $i }}" alt="{{ $item->name }}" class="img-thumbnail" style="width: 100%; height: auto;">
            </div>
          @endfor
        </div>
      </div>
      <a href="{{ route('destination.index') }}" class="btn btn-secondary">Back</a>
      <a href="{{ route('destination.edit', $item->id) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('destination.destroy', $item->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this destination?')">Delete</button>
      </form>
    </div>
  </div>
</div>
@endsection
