<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>

<body>

    <div class="container-fluid w-50 p-3">
        <div class="row justify-content-center">
            <h1 class="pb-5 pt-5">Ergebnis der Umkreissuche</h1>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width: 45%" scope="col">Autohändler</th>
                    <th style="width: 35%" scope="col">Ort</th>
                    <th scope="col">Entfernung</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ausgabe as $ort)
                <tr>
                    <th scope="row">{{ $ort['dealer']}}</th>
                    <td>{{ $ort['ort']}}</td>
                    <td>{{ $ort['distance']}} km</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
