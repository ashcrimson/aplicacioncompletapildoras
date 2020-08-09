<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>

@if(Session::has('usuario_borrado'))

   <p class="bg-danger">{{session('usuario_borrado')}}</p> 

@endif
    <h1 style="text-align:center; margin:50px 0;">Página principal del administrador</h1>

    <table width="500" class="table">
        <tr>
            <th>Id</th>
            <th>Foto:</th>
            <th>Role Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Creado</th>
            <th>Actualizado</th>
        </tr>
        @if($users)
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                @if($user->foto)
                <td><img src="/images/{{$user->foto->ruta_foto}}" width="150" alt=""></td>
                @else
                <td><img src="/images/image-not-found.jpg" width="150" alt=""></td>
                @endif
                <td>{{$user->role_id}}</td>
                <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
            </tr>
            @endforeach
        @endif
    </table>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>