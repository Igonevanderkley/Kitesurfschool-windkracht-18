<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal information</title>
</head>
<body>
    <h1>Personal information</h1>

    <form action="{{ route('user.store') }}" method="POST">

        @csrf
    </form>


</body>
</html>