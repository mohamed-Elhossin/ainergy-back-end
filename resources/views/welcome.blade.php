<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
 
</head>

<body class="antialiased">

    <h1>Welcome in this page</h1>


    <form action="{{ route('admin.AuthRegister') }}" method="POST">
        @csrf
        <button>Tetst</button>
    </form>

</body>

</html>
