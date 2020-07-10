<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{url('auto/create')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" id="Name" name="Name">
    </div>
    <div class="form-group">
        <label for="PLZ">PLZ </label>
        <input type="text" class="form-control" id="PLZ" name="PLZ">
    </div>

    <button type="submit" class="btn btn-primary">Speichern</button>
</form>

</body>
</html>