@extends('layouts.main')

@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Table Destinations <a href="{{ route('destination.create') }}" class="btn btn-sm btn-success">Tambah Destination</a></h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Nama</th>
            <th class="text-white">Deskripsi</th>
            <th class="text-white">Lokasi</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $destination)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $destination->name }}</td>
            <td>{{ $destination->description }}</td>
            <td>{{ $destination->location }}</td>
            <td>
              <a href="{{ route('destination.show', $destination->id) }}" class="btn btn-sm btn-info">Show</a>
              <a href="{{ route('destination.edit', $destination->id) }}" class="btn btn-sm btn-primary">Edit</a>
              <form action="{{ route('destination.destroy', $destination->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this destination?')">Delete</button>
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