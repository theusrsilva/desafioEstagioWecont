<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Cadastro de Novo Telefone</title>
</head>
<body>
<?php
$url = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$user_id = $url[count($url) - 2];
echo "<h1> Telefone {$user_id}</h1>";
?>
<form id="form" method="post" action="{{route('phones.update', [$user_id])}}" class="form-group">
    @method('PATCH')
    @csrf
    <label for="">Número de telefone</label><br>
    <input type="text" name="number" class="form-control-sm"><br><br>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>


</body>
</html>
