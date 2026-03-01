<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; color: #1f1f1f;">
    <h2 style="margin-bottom: 8px;">New Contact Message</h2>
    <p style="margin-top: 0;">A new contact message has been submitted from the website.</p>

    <table cellpadding="6" cellspacing="0" border="0">
        <tr><td><strong>Name</strong></td><td>{{ $payload['contact_name'] ?? '-' }}</td></tr>
        <tr><td><strong>Email</strong></td><td>{{ $payload['contact_email'] ?? '-' }}</td></tr>
        <tr><td><strong>Phone</strong></td><td>{{ $payload['contact_phone'] ?: '-' }}</td></tr>
        <tr><td><strong>Message</strong></td><td>{{ $payload['contact_message'] ?? '-' }}</td></tr>
    </table>
</body>
</html>
