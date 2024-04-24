<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4169e1;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        .details {
            margin-top: 20px;
        }

        .details p {
            margin-bottom: 5px;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4169e1;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #800000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Hello,</h2>
        <p>A new message from the website has been submitted with the following details:</p>

        <div class="details">
            <p><strong>Full Name:</strong> {{ $formData['full_name'] }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p><strong>Phone Number:</strong> {{ $formData['phone'] }}</p>
            <p><strong>Message:</strong> {{ $formData['message'] }}</p>
        </div>

        <p>Please follow up with the user as soon as possible.</p>

        <p>Thank you,<br>
            <strong>Booker T Transport LLC</strong>
        </p>

        <a href="#" class="button" style="margin-top: 20px;">Contact User</a>
    </div>
</body>

</html>
