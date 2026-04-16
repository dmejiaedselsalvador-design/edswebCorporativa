<!DOCTYPE html>
<html>
    <head>
        <title>New Inquiry</title>
    </head>
    <body style="font-family: sans-serif; color: #333">
        <h2 style="color: #1e3a8a">New Contact Inquiry from Website</h2>
        <p><strong>Name:</strong> {{ $data["name"] }}</p>
        <p><strong>Email:</strong> {{ $data["email"] }}</p>
        <p><strong>Message:</strong></p>
        <div style="background: #f3f4f6; padding: 15px; border-radius: 10px">
            {{ $data["message"] }}
        </div>
    </body>
</html>
