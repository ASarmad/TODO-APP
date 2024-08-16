<!DOCTYPE html>
<html lang="en">
<head>
    <title>TODO APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            color: #718096;
            line-height: 1.4;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
        }

        .wrapper {
            width: 100%;
            background-color: #edf2f7;
            padding: 0;
            margin: 0;
        }

        .content {
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
        }

        .header {
            padding: 15px 0;
            text-align: center;
        }

        .body {
            background-color: #edf2f7;
            padding: 0;
            border-top: 1px solid #edf2f7;
            border-bottom: 1px solid #edf2f7;
        }

        .inner-body {
            background-color: #ffffff;
            border: 1px solid #e8e5ef;
            border-radius: 2px;
            box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015);
            margin: 0 auto;
            padding: 32px;
            width: 100%;
            max-width: 570px;
            box-sizing: border-box;
        }

        .footer {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 32px;
            width: 100%;
            box-sizing: border-box;
        }

        .footer p {
            color: #b0adc5;
            font-size: 12px;
            line-height: 1.5em;
            margin: 0;
        }

        @media only screen and (max-width: 600px) {
            .inner-body, .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <div class="header">
            <h1 style="color: #1e93c9; margin-top: -10px;">TODO APP</h1>
        </div>
        <div class="body">
            <div class="inner-body">
                <h1 style="color: #3d4852; font-size: 18px; font-weight: bold; margin-top: 0;">Hello, {{ $user->name }}!</h1>
                <p style="font-size: 16px; line-height: 1.5em; margin-top: 0;">You are receiving this email because we notice that there are some events needs to be checked.</p>
                <p style="font-size: 16px; line-height: 1.5em; margin-top: 0;">Please notice that the Task Deadline Date is ending Soon at: <b>{{ $task->deadline_date }}</b></p>
                <p style="font-size: 16px; line-height: 1.5em; margin-top: 0;">Regards,<br>TODO APP</p>
            </div>
        </div>
        <div class="footer">
            <p>© 2024 TODO APP.</br> All rights reserved.</p>
        </div>
    </div>
</div>
</body>
</html>
