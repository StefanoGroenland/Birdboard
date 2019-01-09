<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Birdboard</title>
</head>
<body>
    <h1>Create a Project</h1>

    <form method="POST" action="/projects">
        @csrf

        <input type="text" name="title">

        <textarea name="description" cols="30" rows="10"></textarea>

        <button type="submit">Create project</button>
    </form>
</body>
</html>
