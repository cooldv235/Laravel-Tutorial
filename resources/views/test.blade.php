<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test View</title>
</head>
<body>

    <!-- <h1><?= $name ?></h1> -->  <!-- Not a Safe Way to directly echo here -->

    <h1>{{ $name }}</h1>    <!-- INSTEAD USE BLADE TEMPLATE | IT WILL ESCAPE THE DATA -->

    <h1>{!! $name !!}</h1>  <!-- THIS SYNTAX WILL NOT EXCAPE THE DATA -->
    
</body>
</html>