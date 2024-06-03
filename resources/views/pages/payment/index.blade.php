@extends('layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h1 class="mb-4">Payments</h1>
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
    <div class="card">
        <h5 class="card-header">Table Payments</h5>
        <div class="table-responsive text-nowrap p-3">
            <table class="table" id="example">
                <thead>
                    <tr class="text-nowrap table-dark">
                        <th class="text-white">No</th>
                        <th class="text-white">User</th>
                        <th class="text-white">Package</th>
                        <th class="text-white">Booking Date</th>
                        <th class="text-white">Number of People</th>
                        <th class="text-white">Total Price</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->package->name }}</td>
                        <td>{{ $booking->booking_date }}</td>
                        <td>{{ $booking->number_of_people }}</td>
                        <td>{{ $booking->total_price }}</td>
                        <td>{{ $booking->payment ? $booking->payment->status : 'Pending' }}</td>
                        <td>
                            @if(!$booking->payment)
                                <a href="{{ route('payments.create', ['booking_id' => $booking->id]) }}" class="btn btn-sm btn-primary">Pay Now</a>
                            @else
                                <span class="badge bg-success">Paid</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
