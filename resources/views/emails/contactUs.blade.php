<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="display: flex;flex-direction:column;background-color: #b3b19b2b;">
    <h1 style="color: grey; text-transform: uppercase;">Message from a customer</h1><br>
    <div style="display: flex;">
        <div style="display: flex; flex-direction:column; align-items:flex-start; margin-right: 20px;">
            <span style="font-size: 20px;">User Email: <strong style="color: #f1f0e6;background-color: darkgray;padding: 5px 10px;border-radius: 5px;">{{ $email }}</strong></span><br>
            <span style="font-size: 20px;">User Name: <strong style="color: #f1f0e6;background-color: darkgray;padding: 5px 10px;border-radius: 5px;">{{ $name }}</strong></span><br>
        </div>
        <div style="display: flex; flex-direction:column; align-items:flex-start">
            <span style="font-size: 20px;">User Phone Number: <strong style="color: #f1f0e6;background-color: darkgray;padding: 5px 10px;border-radius: 5px;">{{ $phone }}</strong></span><br>
            <span style="font-size: 20px;">Services interested in: <strong style="color: #f1f0e6;background-color: darkgray;padding: 5px 10px;border-radius: 5px;">{{ implode(',', $services ?? [])  }}</strong></span><br>
        </div>
    </div>
        <span style="font-size: 30px">Message: </span>
        <p style="font-size: 18px;color:#f1f0e6; background-color: rgba(102, 126, 102, 0.836);padding: 10px;">{{ $messageText }}</p>
   
</body>
</html>