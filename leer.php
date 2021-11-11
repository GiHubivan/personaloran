<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script>
        $.getJSON('archivo/users.json', function(usuarios) {

            $("#res").text(usuarios.permiso[0].rol);
        })
    </script>

    <title>Document</title>
</head>

<body>
    <span id="res- ">nada</span>

</body>

</html>