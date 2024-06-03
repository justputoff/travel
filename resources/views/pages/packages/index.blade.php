@extends('layouts.main')

@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Table Packages <a href="{{ route('packages.create') }}" class="btn btn-sm btn-success">Tambah Package</a></h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Name</th>
            <th class="text-white">Description</th>
            <th class="text-white">Price</th>
            <th class="text-white">Destination ID</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($packages as $package)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $package->name }}</td>
            <td>{{ $package->description }}</td>
            <td>{{ $package->price }}</td>
            <td>{{ $package->destination_id }}</td>
            <td>
              <a href="{{ route('packages.show', $package->id) }}" class="btn btn-sm btn-info">Show</a>
              <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-sm btn-primary">Edit</a>
              <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this package?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- / Content -->

@endsection