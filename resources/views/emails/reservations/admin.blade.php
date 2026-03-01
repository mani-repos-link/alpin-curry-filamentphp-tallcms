<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Reservation Request</title>
</head>
<body style="font-family: Arial, sans-serif; color: #1f1f1f;">
    <h2 style="margin-bottom: 8px;">New Reservation Request</h2>
    <p style="margin-top: 0;">A new reservation has been submitted from the website.</p>

    <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; border-color: #ddd; margin-top: 12px;">
        <tr><td><strong>Name</strong></td><td>{{ $reservation->name }}</td></tr>
        <tr><td><strong>Email</strong></td><td>{{ $reservation->email }}</td></tr>
        <tr><td><strong>Phone</strong></td><td>{{ $reservation->phone }}</td></tr>
        <tr><td><strong>Guests</strong></td><td>{{ $reservation->guests }}</td></tr>
        <tr><td><strong>Date</strong></td><td>{{ $reservation->reservation_date?->format('Y-m-d') }}</td></tr>
        <tr><td><strong>Time</strong></td><td>{{ $reservation->reservation_time }}</td></tr>
        <tr><td><strong>Message</strong></td><td>{{ $reservation->message ?: '-' }}</td></tr>
    </table>
</body>
</html>
