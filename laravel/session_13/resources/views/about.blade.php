<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>age</th>
            </tr>
        </thead>
        <tbody>
         
            @foreach ($users as $user)
            <tr>
                @if ($user["name"]=="ahmed")
                <td>{{  $user["name"] }}</td>
                <td>{{  $user["age"] }}</td>         
                   @endif
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>