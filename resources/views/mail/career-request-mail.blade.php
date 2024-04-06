<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The AulabPOST</title>
</head>

<body>
    <div class="container-fluid p-1 justify-content-center aligne-items-center" style="margin-left: 40px; margin-right: 40px;">
        <a href="{{ route('homepage') }}">
            <img class="d-inline-block align-text-top" style="height: 85px; margin-right: 15px;"
                src="public/img/The-Aulab-Post-logobn-500x320.png" alt="logo the aulab post"></a>

        <h1>Abbiamo ricevuto la tua richiesta</h1>
        <h5>per il ruolo di {{ $info['role'] }}</h5>
        <p>Ricevuta da {{ $info['email'] }}</p>

        <h4>Messaggio:</h4>
        <p>{{ $info['message'] }}</p>
    </div>
</body>

</html>
