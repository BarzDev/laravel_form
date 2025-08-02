<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Booking App</title>
</head>
<body>

<div class="container border mt-5 rounded-4 border-2 ">
    <div class="d-flex justify-content-between align-items-center mb-3 mt-4">
        <h1 class="">Booking List</h1>
        <a href="{{ route('create') }}" class="btn btn-primary rounded-3 px-3">+ Add</a>
    </div>


        @if(session('success'))
        <div class="alert alert-info" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Booking Date</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $index => $booking)
                <tr>
                    <td>{{ $bookings->firstItem() + $index }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ $booking->type }}</td>
                    <td>
                        <a href="{{ route('edit', $booking->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <form method="POST" action="{{ route('destroy', $booking->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $bookings->links() }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
