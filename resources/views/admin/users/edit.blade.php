<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align:center">Página para editar usuarios</h1>
    {!! Form::model($user,['method' => 'patch', 
    'action'=>['AdminUsersController@update', 
    $user->id], 'files'=>true]) !!}
        <table>
            <tr>
                <img src="/images/{{$user->foto ? $user->foto->ruta_foto : 'image-not-found.jpg'}}" alt="" width="150"> 
            </tr>
            <tr>
            
            <td colspan="2">
                {!! Form::file('foto_id') !!}
            </td>
            </tr>
            <tr>
            <td>
                {!! Form::label('name', 'Nombre: ') !!}
            </td>
            <td>
                {!! Form::text('name') !!}
            </td>
            
            </tr>
            
            <tr>
            <td>
                {!! Form::label('email', 'E-Mail: ') !!}
            </td>
            <td>
                {!! Form::text('email') !!}
            </td>
            
            </tr>
            <tr>
            <td>
                {!! Form::label('email', 'Verificar E-Mail: ') !!}
            </td>
            <td>
                {!! Form::text('email_verified_at') !!}
            </td>
            
            </tr>
            <tr>
            <td>
                {!! Form::label('role', 'Role: ') !!}
            </td>
            <td>
                {!! Form::text('role_id') !!}
            </td>
            
            </tr>
            
           
            <tr>
            <td>
                {!! Form::submit('Modificar usuario') !!}
            </td>
            <td>
                {!! Form::reset('Borrar') !!}
            </td>
            
            </tr>
        </table>
    {!! Form::close() !!}

    {!! Form::model($user,['method' => 'delete', 
    'action'=>['AdminUsersController@destroy', 
    $user->id]]) !!}

    {!! Form::submit('Eliminar usuario') !!}

    {!! Form::close() !!}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>