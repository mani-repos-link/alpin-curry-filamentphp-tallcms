<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reservation Received</title>
</head>
<body style="font-family: Arial, sans-serif; color: #1f1f1f;">
    <h2 style="margin-bottom: 8px;">Thank you for your reservation request</h2>
    <p style="margin-top: 0;">Hello {{ $reservation->name }}, we have received your request and will confirm shortly.</p>

    <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; border-color: #ddd; margin-top: 12px;">
        <tr><td><strong>Date</strong></td><td>{{ $reservation->reservation_date?->format('Y-m-d') }}</td></tr>
        <tr><td><strong>Time</strong></td><td>{{ $reservation->reservation_time }}</td></tr>
        <tr><td><strong>Guests</strong></td><td>{{ $reservation->guests }}</td></tr>
    </table>

    <p style="margin-top: 16px;">If you need to adjust your reservation, please call us.</p>
</body>
</html>
