<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Alterar dados do usuário</title>
    <style>
        a:link, a:visited {
            background-color: #5555f4;
            color: white;
            padding: 8px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5%;
        }
        #delete {
            background-color: #DC3545;
        }

    </style>
</head>
<body>
<h1>Alterar</h1>
<form method="post" action="{{route('users.update', $user->id)}}" class="form-group">
    @method('PATCH')
    @csrf
    <label for="">Nome</label><br>
    <input type="text" name="name" value={{$user->name}} class="form-control-sm"><br><br>
    <label for="">Email</label><br>
    <input type="text" name="email" value={{$user->email}} class="form-control-sm"><br><br>
    <label for="">Senha</label><br>
    <input type="password" name="password" value={{$user->password}} class="form-control-sm"><br><br><br>


<h3>Telefones</h3><br>
<a href="{{ route('phones.create',$user->id)}}" >Adicionar Telefone</a><br><br>
            @foreach($user->phones as $phone)
                <input type="text" name="number[]" value={{$phone->number}} class="form-control-sm">
                <a href="{{URL::to('/phones/destroy/'. $phone->id)}}" id="delete">Deletar</a><br><br>
            @endforeach

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

</body>
</html>
