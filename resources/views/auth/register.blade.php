<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>register</h1>
    <form action="{{ route('submit') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Isi nama.."><br>
        <input type="text" name="email" placeholder="Isi email.."><br>
        <input type="text" name="password" placeholder="Isi password.."><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>