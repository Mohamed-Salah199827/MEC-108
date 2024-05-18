<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <a class="btn btn-success" href="/create">add student</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">age</th>
                <th scope="col">action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($Students as $Student)
                <tr>
                    <th scope="row">{{ $Student['id'] }}</th>
                    <td>{{ $Student['name'] }}</td>
                    <td>{{ $Student['age'] }}</td>
                    <td>
                        <form method="post" 
                        action="{{ route('student.delete', $Student['id']) }}">
                         @method("DELETE")
                         @csrf
                            <button>delete</button>
                        </form>

                        <form method="post" 
                        action="{{ route('student.update', $Student['id']) }}">
                         @method("PUT")
                         @csrf
                            <button>update</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
