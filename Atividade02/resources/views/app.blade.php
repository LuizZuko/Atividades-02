<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistema de Alunos')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            padding: 15px;
        }

        header a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            padding: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        form {
            background: white;
            padding: 20px;
            max-width: 500px;
        }

        input {
            display: block;
            width: 100%;
            padding: 8px;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
        }
    </style>
</head>

<body>

    @include('includes.menu')

    <main>
        @yield('content')
    </main>

</body>
</html>