<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Migration</title>
</head>
<body>
    @foreach($packages as $package)
    <h2>From: {{ $package->departure }}</h2>
    <h2>To: {{ $package->destination }}</h2>
    <h3>Price: {{ $package->price }}</hs>
    <h3>Period: {{ $package->season }}</hs>
    <hr>
    @endforeach
</body>
</html>