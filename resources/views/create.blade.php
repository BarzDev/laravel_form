<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-6 mx-auto">
        <div class="border border-2 rounded-3 mt-5 p-4">
            <h3 class="text-center mb-4 text-primary">Booking Form</h3>

            <form method="POST" action="{{ route('store') }}">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                    <label for="name" class="text-primary">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" maxlength="14" required>
                    <label for="phone" class="text-primary">Phone</label>
                </div>

                <div class="mb-3">
                    <label for="booking_date" class="form-label text-primary">Booking Date</label>
                    <input type="date" name="booking_date" id="booking_date" class="form-control" required min="{{ date('Y-m-d') }}">
                </div>


                <div class="mb-3">
                    <label for="type" class="form-label text-primary">Package Type</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="" selected disabled>Select Package Type</option>
                        <option value="VIP">VIP</option>
                        <option value="Premium">Premium</option>
                        <option value="Economy">Economy</option>
                    </select>

                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Add Booking</button>
                </div>
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
