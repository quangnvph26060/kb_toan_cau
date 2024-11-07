<!-- resources/views/emails/user_phone_notification.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>New Phone Number Submission</title>
    <style>
        /* General Reset */
        body,
        table,
        td,
        a {
            text-decoration: none;
            color: inherit;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            background-color: #f4f4f7;
        }

        .email-wrapper {
            width: 100%;
            background-color: #f4f4f7;
            padding: 20px;
        }

        .email-content {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .email-header {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .email-body {
            padding: 30px;
        }

        .email-body h2 {
            font-size: 20px;
            color: #333333;
        }

        .email-body p {
            font-size: 16px;
            color: #555555;
            line-height: 1.5;
        }

        .highlight {
            color: #4a90e2;
            font-weight: bold;
        }

        .email-footer {
            background-color: #f4f4f7;
            color: #888888;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="email-wrapper">
        <div class="email-content">
            <!-- Header -->
            <div class="email-header">
                <h1>
                    Đã nhận được bài nộp mới 🎉</h1>
            </div>

            <!-- Body -->
            <div class="email-body">
                <h2>Hello, {{ $name }}</h2>
                <p>Chúng tôi đã nhận được một bài nộp mới với số điện thoại sau:</p>
                <p><span class="highlight">{{ $phoneNumber }}</span></p>
                <p>Vui lòng liên hệ với khách hàng tiềm năng này càng sớm càng tốt.</p>
            </div>

            <!-- Footer -->
            <div class="email-footer">
                <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
            </div>
        </div>
    </div>

</body>

</html>
