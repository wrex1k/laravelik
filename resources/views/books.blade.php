<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoznam kníh</title>
</head>
<body>

<h1>Zoznam kníh</h1>
<ul>
    @foreach($books as $book)
        <li>{{ $book['id'] }}. <strong>{{ $book['title'] }}</strong> - {{ $book['author'] }}</li>
    @endforeach
</ul>

</body>
</html>
