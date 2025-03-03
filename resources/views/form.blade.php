<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulár</title>
</head>
<body>

<h1>Vyplňte formulár</h1>

<form action="{{ url('/submit') }}" method="POST">
    @csrf
    <label for="name">Meno:</label>
    <input type="text" id="name" name="name">
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>

    <label for="age">Vek:</label>
    <input type="number" id="age" name="age">
    <br>

    <button type="submit">Odoslať</button>
</form>

</body>
</html>
