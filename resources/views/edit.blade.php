<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-6 mx-auto">
        <div class="border border-2 rounded-3 mt-5 p-4">
            <h3 class="text-center mb-4 text-success">Edit Form</h3>

             <form method="POST" action="{{ route('update', $booking->id) }}">
                @csrf
                @method('PUT')

                <div class="form-floating mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required  value="{{ $booking->name }}">
                    <label for="name" class="text-success">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" maxlength="14" required value="{{ $booking->phone }}">
                    <label for="phone" class="text-success">Phone</label>
                </div>

                <div class="mb-3">
                    <label for="booking_date" class="form-label text-success">Booking Date</label>
                    <input type="date" name="booking_date" id="booking_date" class="form-control" required min="{{ date('Y-m-d') }}" value="{{ $booking->booking_date }}">
                </div>


                <div class="mb-3">
                    <label for="type" class="form-label text-success">Package Type</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="" disabled {{ $booking->type ? '' : 'selected' }}>Select Package Type</option>
                        <option value="VIP" {{ $booking->type == 'VIP' ? 'selected' : '' }}>VIP</option>
                        <option value="Premium" {{ $booking->type == 'Premium' ? 'selected' : '' }}>Premium</option>
                        <option value="Economy" {{ $booking->type == 'Economy' ? 'selected' : '' }}>Economy</option>
                    </select>
                </div>



                <div class="d-flex justify-content-between">
                    <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Update Booking</button>
                </div>
             </div>
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>

