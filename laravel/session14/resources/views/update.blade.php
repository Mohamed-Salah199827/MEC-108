<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="post" action="{{ route('student.edit', $Student['id']) }}">
        @method("PUT")
        @csrf
        <input type="text" placeholder="name" name="fullName" value="{{ $Student['name'] }}">
        <input type="text" placeholder="age" name="age" value="{{ $Student['age'] }}">

        <button>save</button>

    </form>

</body>

</html>
