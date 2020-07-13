<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Laravel</title>
</head>

<body>
    <div class="container-fluid w-25 p-3">
        <div class="row justify-content-center">
            <h1 class="pb-5 pt-5">Umkreissuche</h1>
        </div>
        <form action="{{url('/')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="PLZ">PLZ </label>
                <input type="text" class="form-control" id="PLZ" name="PLZ" placeholder="PLZ">
            </div>

            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
</div>
</body>

</html>
