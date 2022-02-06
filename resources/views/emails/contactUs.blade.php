<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Message from a user</h1><br>
    <span>User email: <strong>{{ $email }}</strong></span><br>
    <span>User name: <strong>{{ $name }}</strong></span><br>
    <span>User phone number: <strong>{{ $phone }}</strong></span><br>
    <span>Services interested in: <strong>{{ implode(',', $services ?? [])  }}</strong></span><br>
    <p>Message: <br> {{ $messageText }}</p>
</body>
</html>