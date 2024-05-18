<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action=" {{ route('student.add') }}">
        @csrf
        <input type="text" placeholder="name" name="fullName">
        <input type="text" placeholder="age" name="age">

        <button>add</button>
    </form>
</body>

</html>
