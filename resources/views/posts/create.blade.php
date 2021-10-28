
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Novo Post </title>
</head>
<body>

    <form action="{{route('novo_post')}}" method="post">
        @csrf

        <label for="title"> Titulo </label>
        <input type="text" name="title" id="title">

        </br>

        <label for="text"> Texto </label>
        <textarea id="text" name="text" rows="4" cols="50"> </textarea>

        </br>

        <label for="user_id"> ID_USUARIO </label>
        <input type="user_id" name="user_id" id="title">

        </br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>