@extends('layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h1 class="mb-4">Book a Package</h1>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        @foreach ($packages as $package)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $package->name }}</h5>
                    <p class="card-text">{{ $package->description }}</p>
                    <p class="card-text"><strong>Price:</strong> {{ $package->price }}</p>
                    <p class="card-text"><strong>Destination:</strong> {{ $package->destination->name }}</p>
                    <a href="{{ route('books.create', ['package_id' => $package->id]) }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
