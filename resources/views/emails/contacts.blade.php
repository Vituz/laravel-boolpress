<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Email</title>
</head>

<body>
    <h1>Hai ricevuto un nuovo messaggio da {{$data['name']}}</h1>

    <p>email: {{$data['email']}} </p>

    <p>Messaggio: {{$data['body']}}</p>
</body>

</html>