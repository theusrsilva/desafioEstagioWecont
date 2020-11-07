<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <h1>Cadastro de Usuário</h1>
        <form id="form" method="post" action="{{route('users.store')}}" class="form-group">
            @csrf
            <label for="">Nome</label><br>
            <input type="text" name="name" class="form-control-sm"><br><br>
            <label for="">Email</label><br>
            <input type="text" name="email" class="form-control-sm"><br><br>
            <label for="">Senha</label><br>
            <input type="password" name="password" class="form-control-sm"><br><br>
            <label for="">Telefone</label><br>
            <input type="text" name="number[]" class="form-control-sm"><br><br>
            <input type="text" name="number[]" class="form-control-sm"><br><br>


            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>


    </body>
</html>
