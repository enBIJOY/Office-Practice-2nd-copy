<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Platform</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f6f8;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .header {
            background-color: #0d6efd;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 30px;
            color: #333333;
            line-height: 1.6;
        }
        .content h2 {
            margin-top: 0;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #0d6efd;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #666666;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Welcome!</h1>
        </div>

        <div class="content">
            <h2>Hello {{ $user->name ?? 'User' }},</h2>

            <p>
                Thank you for registering with us! We’re excited to have you as part of our community.
            </p>

            <p>
                Your account has been successfully created using the email:
                <strong>{{ $user->email }}</strong>
            </p>

            <p>
                You can now log in and start exploring all the features we offer.
            </p>

            <a href="{{ url('/login') }}" class="button">
                Login to Your Account
            </a>

            <p style="margin-top: 30px;">
                If you have any questions or need assistance, feel free to contact our support team.
            </p>

            <p>
                Best regards,<br>
                <strong>The Admin Team</strong>
            </p>
        </div>

        <div class="footer">
            © {{ date('Y') }} Your Company Name. All rights reserved.
        </div>
    </div>

</body>
</html>
