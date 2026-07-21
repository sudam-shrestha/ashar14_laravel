<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sudam-shrestha/nepali-calender@main/src/nepali-calendar.css">
    <script src="https://cdn.jsdelivr.net/gh/sudam-shrestha/nepali-calender@main/src/nepali-calendar.js"></script>


    <style>
        .container {
            width: 90%;
            margin: 0 auto;
        }

        button{
            cursor: pointer;
        }
    </style>
    @stack('css')
</head>

<body class="bg-purple-50">

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <footer></footer>



    @include('sudam-sweet-alert::alert')
</body>

</html>
