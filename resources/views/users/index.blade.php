<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Cadastro de Usuário</title>

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
    </style>

</head>
<body>
<div>
    <div>
        <h1>Usuários</h1>
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Senha</td>
                <td>Telefones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        @foreach($user->phones as $phone)
                            {{$phone->number}}<br>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('users.edit',$user->id)}}" >Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{route('users.create')}}">Novo usuário</a>
        </div>
    </div>
</div>
</body>
</html>
