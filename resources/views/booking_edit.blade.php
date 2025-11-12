<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>dolanDjogja | Edit Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <form method="POST" action="/view/bookings/update/{{ $booking->id }}"
        class="bg-white p-6 rounded shadow w-full max-w-md">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-blue-700">Edit Booking</h2>

        <input type="number" name="user_id" value="{{ $booking->user_id }}" class="w-full border p-2 mb-3" required>
        <input type="number" name="package_id" value="{{ $booking->package_id }}" class="w-full border p-2 mb-3"
            required>
        <input type="number" name="schedule_id" value="{{ $booking->schedule_id }}" class="w-full border p-2 mb-3"
            required>
        <input type="date" name="booking_date" value="{{ $booking->booking_date }}" class="w-full border p-2 mb-3"
            required>
        <input type="number" name="total_person" value="{{ $booking->total_person }}" class="w-full border p-2 mb-3"
            required>
        <input type="number" name="total_price" value="{{ $booking->total_price }}" class="w-full border p-2 mb-3"
            required>

        <select name="status" class="w-full border p-2 mb-3" required>
            <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="completed" {{ $booking->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>

        <div class="flex justify-between items-center mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            <a href="/view/bookings" class="text-gray-500 hover:underline">Batal</a>
        </div>
    </form>
</body>

</html>