<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <section>
        <img src="https://cdn4.vectorstock.com/i/1000x1000/47/58/sending-emails-and-receiving-mail-email-vector-6144758.jpg" width="100%" height="180px">

        <address>
        <p> <b>FirstName:</b>{{$data['firstname']}}</p>
        <p> <b>LastName:</b>{{$data['lastname']}}</p>
        <p> <b>Email:</b>{{$data['email']}}</p>
        <p> <b>Phone:</b>{{$data['phone']}}</p>
        <p> <b>Message:</b>{{$data['message']}}</p>
    </address>

    </section>
</body>

</html>