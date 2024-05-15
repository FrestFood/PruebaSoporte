<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Soporte</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta id="csrf" name="csrf-token" content="{{ csrf_token() }}">
    <script src="main.js?v0.1"></script>

</head>

<body class="bg-yellow-400">

    <div>
        <div class="p-10">
            <img src="logo.svg" class="mx-auto" alt="">
        </div>
        <div class="text-center">
            <button id="iniciar" class="bg-white px-10 py-3">Iniciar</button>
        </div>
    </div>


    <script>
        var bIniciar = document.getElementById("iniciar");
        bIniciar.onclick = function() {
            bIniciar.innerText = "Espere un segundo por favor..."
            iniciar(bIniciar);
        }
    </script>


</body>

</html>
