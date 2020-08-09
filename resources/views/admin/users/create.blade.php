<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página para agregar usuarios</h1>
    {!! Form::open(['method' => 'post', 
    'action'=>'AdminUsersController@store', 'files'=>true]) !!}
        <table>
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
                {!! Form::label('password', 'Password: ') !!}
            </td>
            <td>
                {!! Form::text('password') !!}
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
                {!! Form::label('foto_id', 'Foto: ') !!}
            </td>
            <td>
                {!! Form::file('foto_id') !!}
            </td>
            
            </tr>
            <tr>
            <td>
                {!! Form::submit('Crear usuario') !!}
            </td>
            <td>
                {!! Form::reset('Borrar') !!}
            </td>
            
            </tr>
        </table>
    {!! Form::close() !!}
</body>
</html>